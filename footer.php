<footer class="footer">
        <div class="footer__inner">
            <a href="<?php echo home_url(); ?>" class="logo">
                KT PORTFOLIO
            </a>
            <div class="nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#about" class="nav__link">
                            About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#works" class="nav__link">
                            Works
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#faq" class="nav__link">
                            Faq
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="<?php echo home_url(); ?>#contact" class="nav__link">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <small class="copyright_txt" style="color: white;">
                    &copy KT PORTFOLIO
                </small>
            </div>
            <!-- /.copyright -->
        </div>
        <!-- /.footer__inner -->
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/loader.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/fv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/fixHeader.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/openbtn.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/accordion.js"></script>

    <?php wp_footer(); ?>

</body>

</html>