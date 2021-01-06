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

        <div class="programs-services">
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

           
            <div class="container overview">
                <div class="row">
                    <div class="col-md-12">
                       
                         <?php 
                        // WP_Query arguments
                        $args = array(
                            'category_name' => 'programs-services',
                            'pagination' => false,
                            'posts_per_page' => '1',
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );

                        // The Query
                        $services = new WP_Query( $args );

                        // The Loop
                        if ( $services->have_posts() ) {
                            while ( $services->have_posts() ) {
                                $services->the_post();
                        ?>
                        
                        <?php 
                                echo "<h3 class='centered'>"; the_title(); echo "</h3>";
                                the_content(); 
                        ?>
                        <?php
                        }
                        } else {
                            echo "<p>Please add Posts to Category: <strong><em>programs-services</em></strong></p>";
                        }

                        // Restore original Post Data
                        wp_reset_postdata();
                        ?>
                        
                        
                    </div>
                </div>
               
               
               <div class="container">
                   <h3>Clinical Serivices</h3>
                       <div class="row clinical-services">
                            <?php 
                            // WP_Query arguments
                            $args = array(
                                'category_name' => 'clinical-services',
                                'pagination' => false,
                                'posts_per_page' => '99',
                                'order' => 'DESC',
                                'orderby' => 'date'
                            );

                            // The Query
                            $clinicalServices = new WP_Query( $args );

                            // The Loop
                            if ( $clinicalServices->have_posts() ) {
                                while ( $clinicalServices->have_posts() ) {
                                       $clinicalServices->the_post();
                            ?>
                            <?php
                                echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-4'>
                                        <h6>
                                            <a href='";
                                            the_permalink();
                                echo        "'>";
                                            the_title();
                                echo       "</a>
                                        </h6>
                                     </div>";
                            ?>


                            <?php
                            }
                            } else {
                                echo "<p>Please add Posts to Category: <strong><em>clinical-services</em></strong></p>";
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?> 
                       </div>
                       
                       <h3>Community Support Serivices</h3>
                       <div class="row community-support-services">
                           <?php 
                            // WP_Query arguments
                            $args = array(
                                'category_name' => 'community-support-services',
                                'pagination' => false,
                                'posts_per_page' => '99',
                                'order' => 'DESC',
                                'orderby' => 'date'
                            );

                            // The Query
                            $communityServices = new WP_Query( $args );

                            // The Loop
                            if ( $communityServices->have_posts() ) {
                                while ( $communityServices->have_posts() ) {
                                       $communityServices->the_post();
                            ?>

                            <?php
                                echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-4'>
                                        <h6>
                                            <a href='";
                                                the_permalink();
                                echo        "'>";
                                                the_title();
                                echo       "</a>
                                        </h6>
                                     </div>";
                            ?>

                            <?php
                            }
                            } else {
                                echo "<p>Please add Posts to Category: <strong><em>community-support-services</em></strong></p>";
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>
                       </div>
               </div>
               
               
                
                <div class="row">
                    <div class="col-md-12 doc-box" >
                        <?php 
                        // WP_Query arguments
                        $args = array(
                            'category_name' => 'service-doc',
                            'pagination' => false,
                            'posts_per_page' => '99',
                            'order' => 'DESC',
                            'orderby' => 'date'
                        );

                        // The Query
                        $serviceDoc = new WP_Query( $args );

                        // The Loop
                        if ( $serviceDoc->have_posts() ) {
                            while ( $serviceDoc->have_posts() ) {
                                    $serviceDoc->the_post();
                        ?>
                        <?php
                            echo "<button data-toggle='collapse'><em><strong>";
                            
                                the_content();
                                
                            echo "</strong></em></button>";
                        ?>
                            
                    
                        <?php
                        }
                        } else {
                            echo "<p>Please add Posts to Category: <strong><em>service-doc</em></strong></p>";
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
