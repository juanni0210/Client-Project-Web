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

        <div class="contact">
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

            <div class="container map-info">
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1D-O3Ix1MvlBg31ZP-VSsJ50PMIhD66h6" width="640" height="480"></iframe>
                    </div>
                    <div class="col-md-6 contact-details">

                         <?php 
                        // WP_Query arguments
                        $args = array(
                            'category_name' => 'contact-infomation',
                            'pagination' => false,
                            'posts_per_page' => '1',
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );

                        // The Query
                        $contactinfo = new WP_Query( $args );

                        // The Loop
                        if ( $contactinfo->have_posts() ) {
                            while ( $contactinfo->have_posts() ) {
                                $contactinfo->the_post();
                        ?>

                        <?php the_content(); ?>
                        <?php
                        }
                        } else {
                            echo "<p>Please add Posts to Category: <strong><em>contact-infomation</em></strong></p>";
                        }

                        // Restore original Post Data
                        wp_reset_postdata();
                        ?>
                        
                        
                    </div>
                </div>
            </div>

            <div class="container-fluid contact-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Leave Us A Message</h3>
                        </div>
                        <div class="col-md-12">
                            <?php 
                                // WP_Query arguments
                                $args = array(
                                    'category_name' => 'contact-form',
                                    'pagination' => false,
                                    'posts_per_page' => '1',
                                    'order' => 'DESC',
                                    'orderby' => 'date'
                                );

                                // The Query
                                $contactform = new WP_Query( $args );

                                // The Loop
                                if ( $contactform->have_posts() ) {
                                    while ( $contactform->have_posts() ) {
                                        $contactform->the_post();
                                ?>

                                <?php the_content(); ?>
                                <?php
                                }
                                } else {
                                    echo "<p>Please add Posts to Category: <strong><em>contact-form</em></strong></p>";
                                }

                                // Restore original Post Data
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container office-hours">
                <h3>Office Hours</h3>
                <div class="row">
                       <?php 
                        // WP_Query arguments
                        $args = array(
                            'category_name' => 'office-hours',
                            'pagination' => false,
                            'posts_per_page' => '2',
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );

                        // The Query
                        $officehours = new WP_Query( $args );

                        // The Loop
                        if ( $officehours->have_posts() ) {
                            while ( $officehours->have_posts() ) {
                                $officehours->the_post();
                        ?>
                        
                        <?php
                        echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>";
                                the_content();
                        echo "</div>";
                        ?>
                    
   
                    <?php
                    }
                    } else {
                        echo "<p>Please add Posts to Category: <strong><em>office-hours</em></strong></p>";
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                    ?>
                </div>
            
                
                <div class="row">
                    <div class="col-md-12 doc-box">
                        <?php 
                        // WP_Query arguments
                        $args = array(
                            'category_name' => 'contact-doc',
                            'pagination' => false,
                            'posts_per_page' => '99',
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );

                        // The Query
                        $contactDoc = new WP_Query( $args );

                        // The Loop
                        if ( $contactDoc->have_posts() ) {
                            while ( $contactDoc->have_posts() ) {
                                    $contactDoc->the_post();
                        ?>
                        <?php
                            echo "<button data-toggle='collapse'><em><strong>";
                            
                                the_content();
                                
                            echo "</strong></em></button>";
                        ?>
                            
                    
                        <?php
                        }
                        } else {
                            echo "<p>Please add Posts to Category: <strong><em>contact-doc</em></strong></p>";
                        }

                        // Restore original Post Data
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- END OF CONTACT -->


    <!--   FOOTER       -->
    <?php get_footer(); ?>