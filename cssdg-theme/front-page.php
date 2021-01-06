<?php get_header(); ?>
   
    <header>
        <!--     CONTACT/LANGUAGE OPTION  -->
        <div class="contact-info dark-grey-theme white-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <p class="info">
                            <i class="fas fa-check-circle"></i>
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

        <!-- MAIN NAVIGATION -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="CSS Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
                            <i class="fas fa-bars"></i>
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

        <!-- FIXED ESCAPE BUTTON -->
        <button class="btn light-blue-theme escape">
                <a href="https://www.google.com">Escape</a>
            </button>


    </header>
    <!--     HERO IMAGE / SLIDER     -->

    <div id="carouselCSS" class="carousel slide" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselFood" data-slide-to="0" class="active"></li>
            <li data-target="#carouselFood" data-slide-to="1"></li>
        </ol>

        <!--Wrapper for slides-->
        <div class="carousel-inner" role="listbox">
            <!--Items and Captions for the Carosuel-->
            <!--ITEM #1-->
            <?php 
            // WP_Query arguments
            $args = array(
                'category_name' => 'masthead-active-image',
                'pagination' => false,
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderby' => 'date'
            );

            // The Query
            $mastheadImages = new WP_Query( $args );

            // The Loop
            if ( $mastheadImages->have_posts() ) {
                while ( $mastheadImages->have_posts() ) {
                       $mastheadImages->the_post();
            ?>
                
            <?php
                 echo "<div class='carousel-item active'>";
                            the_post_thumbnail('post-thumbnail', array('class' => "d-block h-25 w-100 contrast"));
                 echo "    <div class='carousel-caption d-md-block'>
                               <h1 class='display-4'>";
                                    the_title();
                 echo "        </h1>
                               <button class='btn light-blue-theme white-text'>
                                   <a href='";
                                       the_permalink();
                 echo "'           class='nav-link-sub'>Learn More
                                   </a>
                               </button>
                           </div>
                      </div>";            
            ?>
            
            <?php
            }
            } else {
                echo "<p>Please add Posts to Category: <strong><em>masthead-active-image</em></strong></p>";
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>


            <!--ITEM #2-->
            <?php 
            // WP_Query arguments
            $args = array(
                'category_name' => 'masthead-images',
                'pagination' => false,
                'posts_per_page' => '100',
                'order' => 'DESC',
                'orderby' => 'date'
            );

            // The Query
            $mastheadImages = new WP_Query( $args );

            // The Loop
            if ( $mastheadImages->have_posts() ) {
                while ( $mastheadImages->have_posts() ) {
                       $mastheadImages->the_post();
            ?>
                
            <?php
                 echo "<div class='carousel-item'>";
                            the_post_thumbnail('post-thumbnail', array('class' => "d-block h-25 w-100 contrast"));
                 echo "    <div class='carousel-caption d-none d-md-block'>
                               <h1 class='display-4'>";
                                    the_title();
                 echo "        </h1>
                               <button class='btn light-blue-theme white-text'>
                                   <a href='";
                                       the_permalink();
                 echo "'           class='nav-link-sub'>Learn More
                                   </a>
                               </button>
                           </div>
                      </div>";            
            ?>
            
            <?php
            }
            } else {
                echo "<p>Please add Posts to Category: <strong><em>masthead-images</em></strong></p>";
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>

           <!-- <div class="carousel-item">
                <img class="d-block w-100 contrast" src="<?php bloginfo( 'template_url' ); ?>/images/WIC.jpg" alt="Second carousel slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">E-Counselling Now Available</h1>
                    <button class="btn light-blue-theme white-text"><a href="https://app.oncallhealth.ca/booking/css/" class="nav-link-sub">Learn More</a></button>
                </div>
            </div>-->

        </div>

        <!--end of carousel inner-->

        <!--Forward and Previous icons for the carousel-->
        <a class="carousel-control-prev" href="#carouselCSS" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselCSS" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--end of caro-->





    <!--    WELCOME TO SDG    -->
    <div class="container welcome">
        <div class="row">
           <?php 
            // WP_Query arguments
            $args = array(
                'category_name' => 'welcome',
                'pagination' => false,
                'posts_per_page' => '1',
                'order' => 'DESC',
                'orderby' => 'date'
            );

            // The Query
            $contactpost = new WP_Query( $args );

            // The Loop
            if ( $contactpost->have_posts() ) {
                while ( $contactpost->have_posts() ) {
                    $contactpost->the_post();
            ?>
            
            <div class="d-none d-md-block col">
               <?php the_post_thumbnail('post-thumbnail', array('class' => "img-fluid rounded")); ?>
            </div>
            
            <div class="col-sm-12 col-md-12 col-lg-5">
                <h2 class="centered"><?php the_title(); ?></h2>

                <?php the_content(); ?>
                
                <div class="btn-center">
                    <a href="<?php the_permalink(); ?>" class="nav-link-sub"><button class="btn light-blue-theme white-text">Read More</button></a>
                </div>
            <?php
            }
            } else {
                echo "<p>Please add Posts to Category: <strong><em>welcome</em></strong></p>";
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>

            </div>
        </div>
    </div>


    <div class="container-fluid services">
        <div class="col-12">
            <h2 class="services centered"> OUR SERVICES </h2>

        </div>

        <!-- TABBED NAVIGATION -->
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active service-tab" id="clinical-tab" data-toggle="tab" href="#clinical-services" role="tab" aria-controls="clinical-services" aria-selected="true">Clinical Services</a>

                <a class="nav-item nav-link service-tab" id="community-tab" data-toggle="tab" href="#community-services" role="tab" aria-controls="community-services" aria-selected="false">Community Support Services</a>
            </div>


            <!-- CLINICAL  SERVICES -->

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="clinical-services" role="tabpanel" aria-labelledby="clinical-tab">
                    <!--     OUR SERVICES     -->
                    <div id="clinical-services">
                        <div class="row no-gutters home-images">

                            <!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">-->
                            
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
                                    echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-3'>";
                                            the_post_thumbnail('post-thumbnail', array('class' => "img-fluid contrast obj-fit"));
                                      echo "<div class='img-title'>
                                                <a href='";
                                                    the_permalink();
                                      echo      "'><h4 class='white-text'>";
                                                    the_title();
                                      echo          "</h4>
                                                </a>
                                            </div>
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
                    </div>


                </div>


                <!-- COMMUNITY SUPPORT SERVICES -->
                <div class="tab-pane fade" id="community-services" role="tabpanel" aria-labelledby="community-tab">

                    <div id="community-support-services">
                        <div class="row no-gutters home-images">

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
                                   echo "<div class='col-xs-12 col-sm-12 col-md-6 col-lg-3'>";
                                            the_post_thumbnail('post-thumbnail', array('class' => "img-fluid contrast obj-fit"));
                                      echo "<div class='img-title'>
                                                <a href='";
                                                    the_permalink();
                                      echo      "'><h4 class='white-text'>";
                                                    the_title();
                                      echo       "</h4>
                                                </a>
                                            </div>
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
                    <!--End of Community Support Services-->
                </div>
            </div>
        </nav>

    </div>
    <!--END OF SERVICES -->



    <!--    MISSION STATEMENT      -->
    <!--  Blue Banner      -->
    
    <?php 
    // WP_Query arguments
    $args = array(
        'category_name' => 'missions',
        'pagination' => false,
        'posts_per_page' => '1',
        'order' => 'DESC',
        'orderby' => 'date'
    );

    // The Query
    $mission = new WP_Query( $args );

    // The Loop
    if ( $mission->have_posts() ) {
        while ( $mission->have_posts() ) {
            $mission->the_post();
    ?>

    <div class="mission-statement light-blue-theme">
        <h1 class="white-text mission-text">
            <?php the_content(); ?>
        </h1>
    </div>

    <?php
    }
    } else {
        echo "<p>Please add Posts to Category: <strong><em>missions</em></strong></p>";
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>
    
    
    

    <!--    ACCREDITED STATEMENT     -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                 <?php 
                // WP_Query arguments
                $args = array(
                    'category_name' => 'accredited-statement',
                    'pagination' => false,
                    'posts_per_page' => '1',
                    'order' => 'DESC',
                    'orderby' => 'date'
                );

                // The Query
                $accreditedStatement = new WP_Query( $args );

                // The Loop
                if ( $accreditedStatement->have_posts() ) {
                    while ( $accreditedStatement->have_posts() ) {
                           $accreditedStatement->the_post();
                ?>
                <h2 class="accredited-text"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php
                }
                } else {
                    echo "<p>Please add Posts to Category: <strong><em>accredited-statement</em></strong></p>";
                }

                // Restore original Post Data
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <!--    LATEST NEWS      -->
        <div class="row latest-news">
            <div class="col-12">
                <h2 class="news-title centered">Latest News</h2>
            </div>
        </div>


        <!-- NEWS / POST CARDS -->
        <div class="row">
            <?php 
            // WP_Query arguments
            $args = array(
                'category_name' => 'news',
                'pagination' => false,
                'posts_per_page' => '3',
                'order' => 'DESC',
                'orderby' => 'date'
            );

            // The Query
            $news = new WP_Query( $args );

            // The Loop
            if ( $news->have_posts() ) {
                while ( $news->have_posts() ) {
                       $news->the_post();
            ?>
                

            <?php
                echo "<div class='col-md-4'>
                        <div class='card'>";
                            the_post_thumbnail('medium', array('class' => "card-img-top"));
                echo "      <div class='card-body'>
                                <h5 class='card-title'>";
                                    the_title();
                echo "          </h5>
                                <p class='card-text'>";
                                    the_content();
                echo "          </p>
                            </div>
                        </div>
                      </div>";
            ?>


                
            <?php
            }
            } else {
                echo "<p>Please add Posts to Category: <strong><em>news</em></strong></p>";
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>




        </div>
    </div>

    <hr>
    <!--   PARTNERS       -->
    <div class="container">
        <div class="row partners">
            <div class="col-12">
                <h2 class="partners-title centered">Partners/Funders</h2>
            </div>
        </div>

        <div class="row resource-partners">
            <?php 
            // WP_Query arguments
            $args = array(
                'category_name' => 'partners',
                'pagination' => false,
                'posts_per_page' => '100',
                'order' => 'DESC',
                'orderby' => 'date'
            );

            // The Query
            $partners = new WP_Query( $args );

            // The Loop
            if ( $partners->have_posts() ) {
                while ( $partners->have_posts() ) {
                    $partners->the_post();
            ?>


            <?php 
                    echo "<div class='col-md-3'>";
                    the_post_thumbnail('post-thumbnail', array('class' => "img-fluid"));
                    the_content(); 
                    echo "</div>";
            ?>


            <?php
            }
            } else {
                echo "<p>Please add Posts to Category: <strong><em>partners</em></strong></p>";
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>

<!--   FOOTER       -->
<?php get_footer(); ?>	