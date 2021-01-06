<footer class="dark-grey-theme white-text">

        <div class="container">

            <div class="row ">
                <div class="col-md-12 col-lg-2 footer-nav">
                    <a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-white.png" class="img-responsive" alt="CSS Logo"></a>
                </div>


                <div class="col-md-12 col-lg-10">
                    <nav class="navbar-expand-md navbar-dark navbar-footer">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'col-md-12 collapse navbar-collapse justify-content-md-end justify-content-lg-end',
                                'container_id'      => 'navbarNavDropdown',
                                'menu_class'        => 'navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                        
                        
                    </nav>
                </div>
                <!-- End of Footer Navigation Column Div -->
            </div>

            <div class="row collapse-contact-info  d-md-block d-lg-none">
                <div class="col-md-12 contact-button">

                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars white-text"></i>
                            </button>

                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fas fa-map-marker-alt"></i></button>

                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fas fa-phone"></i></button>
                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls=" multiCollapseExample3"><i class="fas fa-fax"></i></button>
                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4"><i class="fas fa-envelope"><i class="fas fa-envelope"></i></i></button>
                </div>

                <div class="container contact-info">
                    <div class="row ">
                        <div class="col-12">
                            <div class="collapse navbar-collapse " id="multiCollapseExample1">
                                <div class="card card-body ">
                                    <p style="color: black"> Mailing Address | 26 Montreal Road, Cornwall, Ontario K6H 1B1</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                <div class="card card-body">
                                    <p style="color: black">Phone |
                                        <a href="tel:613-932-4610">(613) 932-4610</a> / <a href="tel:+1-855-647-8483">1-855-647-8483</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample3">
                                <div class="card card-body">
                                    <p style="color: black">Fax | (613) 932-5765 / 1-888-622-5765 </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample4">
                                <div class="card card-body">
                                    <p style="color: black">
                                        Email | <a href="mailto:admin@css-sdg.ca">admin@css-sdg.ca</a>
                                        <br> (*Please note: email is for general inquiries only, not appropriate for crisis situations. )
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="showing-contact-info">



                <p class="footer-contact d-sm-none d-md-block ">
                    Mailing Address | 26 Montreal Road, Cornwall, Ontario K6H 1B1 <br> Phone | <a href="tel:613-932-4610">(613) 932-4610</a> / <a href="tel:+1-855-647-8483">1-855-647-8483</a> <br> Fax | (613) 932-5765 / 1-888-622-5765 <br> Email |
                    <a href="mailto:admin@css-sdg.ca">admin@css-sdg.ca</a> <br> (*Please note: email is for general inquiries only, <br> not appropriate for crisis situations. )

                </p>
            </div>


            <!-- End of Footer information Row -->

            <div class="row">
                <div class="col-12">
                    <p class="copyright">
                        Copyright © 2009 Counselling and Support Services of S.D. &amp; G. Redesigned by SMJ Team
                    </p>
                </div>
            </div>
        </div>

    </footer>

    <script src="<?php bloginfo( 'template_url' ); ?>/js/modernizr-custom.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/index.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/fontawesome-all.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/lightbox.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.paroller.min.js"></script>

    <?php wp_footer(); ?>
</body>

</html>
