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

        <!--end of container-->

        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

        <section>
            <div class="container">
                <div class="row posts">
                    <div class="col-12">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p class="post-text">
                            <?php the_content(); ?>
                        </p>


                        <?php endwhile; else: ?>
                        <?php _e('Sorry, no posts matched your criteria.'); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>

        <!-- END OF POSTS -->



        <!--   FOOTER       -->
        <?php get_footer(); ?>
