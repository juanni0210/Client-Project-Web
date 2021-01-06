<?php get_header(); ?>


<div class="sub-pages">

    <header>
        <!--     CONTACT/LANGUAGE OPTION  -->
        <div class="contact-info dark-grey-theme white-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <p class="info">
                            <i class="fas fa-check-circle"></i>
                            <!--f058 -->
                            <a href="https://app.oncallhealth.ca/booking/css/" class="nav-link-sub" class="light-blue-text">Cyber Services Avaible Now!</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="">
                            <i class="fas fa-phone"></i>
                            <a href="tel:613-932-4610" class="nav-link-sub"> (613) 932-4610</a> / <a href="tel:+1-855-647-8483" class="nav-link-sub">1-855-647-8483</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <nav class="language-nav navbar navbar-expand-lg">
                           <div class="container">
                               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"></button>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'secondary',
                                    'depth'             => 2,
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'navbarNav',
                                    'menu_class'        => 'navbar-nav nav-fill w-100',
                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- FIXED ESCAPE BUTTON -->
        <button class="btn light-blue-theme escape">
                <a href="https://www.google.com">Escape</a>
        </button>


    </header>
    <!-- MAIN NAVIGATION -->

    <div class="post-page">
        <div>
            <nav class="navbar navbar-expand-lg grey-theme-transparent subpage-nav">
                <div class="container">
                    <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="CSS Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <i class="fas fa-bars white-text"></i>
                            </span>
                        </button>


                    <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarNav',
                                'menu_class'        => 'navbar-nav nav-fill w-100',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>

                </div>
            </nav>
        </div>
	
        <div class="container">
            <div class="row archive-mains">
                <div class="col-md-8">
                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h3>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h3>
                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h3>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h3>
                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h3>Archive for <?php the_time('F jS, Y'); ?>:</h3>
                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h3>Archive for <?php the_time('F, Y'); ?>:</h3>
                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h3>Archive for <?php the_time('Y'); ?>:</h3>
                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h3>Author Archive</h3>
                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && 
                    !empty($_GET['paged'])) { ?>
                    <h3>Blog Archives</h3>
                    <?php } ?>

                    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

                    <blockquote>
                         <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    </blockquote>

                    <p><?php the_date(); ?> by <?php the_author(); ?></p>

                    <?php the_content(); ?>

                    <?php endwhile; else: ?>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                    <?php endif; ?> 	
                </div> 

                <div class="col-md-4">
                    <?php get_sidebar(); ?>	
                </div>
            </div>
        </div>
	</div>
<?php get_footer(); ?>
