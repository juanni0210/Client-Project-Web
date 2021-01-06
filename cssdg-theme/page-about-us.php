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
        <div class="about">
            <div class="sub-banner">
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
                    <!--end of container-->
                </nav>

                <h1 class="subpage-heading"><?php the_title(); ?></h1>
            </div>
            <!--end of navigation-->
           
           
           <!-- MAIN CONTENT -->
            <div class="container">
                <div class="row about-text">
                    <div class="col-md-12">
                        
                        <?php 
                        // WP_Query arguments
                        $args = array(
                            'category_name' => 'about-company',
                            'pagination' => false,
                            'posts_per_page' => '1',
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );

                        // The Query
                        $about = new WP_Query( $args );

                        // The Loop
                        if ( $about->have_posts() ) {
                            while ( $about->have_posts() ) {
                                   $about->the_post();
                        ?>

                        <?php 
                            echo "<h3 class='centered'>"; the_title(); echo "</h3>";
                            the_content(); 
                        ?>
                        <?php
                        }
                        } else {
                            echo "<p>Please add Posts to Category: <strong><em>about-company</em></strong></p>";
                        }

                        // Restore original Post Data
                        wp_reset_postdata();
                        ?>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <!--end of main content-->
        </div>
<!-- END OF ABOUT -->



<!--   FOOTER       -->
<?php get_footer(); ?>	
