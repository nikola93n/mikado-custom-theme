<!-- Start Footer Section -->
<footer style="background-color: var(--secondary-color);">
    <div class="container mt-5">
        <div class="row py-5">
            <div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
                <ul class="d-flex">
                    <li class="me-4"><a href="<?php echo get_theme_mod('set_social_one_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_one'); ?>"></i></a>
                    </li>
                    <li class="me-4"><a href="<?php echo get_theme_mod('set_social_two_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_two'); ?>"></i></a>
                    </li>
                    <li class="me-4"><a href="<?php echo get_theme_mod('set_social_three_url'); ?>" target="_blank"><i
                                class="<?php echo get_theme_mod('set_social_three'); ?>"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 d-flex justify-content-center justify-content-md-end align-items-center">
                <p class="made mt-3 mt-md-0">© <?php echo date('Y'); ?>
                    <?php echo get_theme_mod('set_footer'); ?> | Powered By <a href="https://nnweb.net"
                        target="_blank">M!kado Theme</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll to Top -->
<button id="scrollToTop"><a href="#home"><i class="bi bi-arrow-up"></i></a></button>
<!-- End Footer Section -->






<?php wp_footer(); ?>
</body>

</html>