<div class="to_home-ad">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad-placeholder.jpg" alt="test">
</div>
<footer class="to_global-footer">
    <div class="to_footer-media-partners">
        <div class="to_wrap">
            <h3>Media Partners</h3>
            <ul>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-1.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-2.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-3.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-4.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-5.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-6.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-7.jpg"></a></li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/media-8.jpg"></a></li>
            </ul>
        </div>
    </div>
    <div class="to_footer-quick-links">
        <div class="to_wrap">
            <ul><?php wp_nav_menu( array('theme_location' => 'quick_links' )); ?></ul>
        </div>
    </div>
    <div class="to_footer-sub-footer">
        <div class="to_wrap">
            <div class="to_sub-footer">
                Footer Section One
            </div>
            <div class="to_sub-footer">
                Footer Section Two
            </div>
            <div class="to_sub-footer">
                Footer Section Three
            </div>
        </div>
    </div>
    <div class="to_footer-websites">
        <div class="to_wrap">
            <ul>
                <li><a hred="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-touch-endocrinology.jpg"></a></li>
                <li><a hred="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-touch-oncology.jpg"></a></li>
                <li><a hred="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-touch-ophthalmology.jpg"></a></li>
                <li><a hred="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-touch-neurology.jpg"></a></li>
                <li><a hred="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-touch-cardio.jpg"></a></li>
                <li><a hred="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-touch-respiratory.jpg"></a></li>
            </ul>
        </div>
    </div>
    <div class="to_global-credits">
        <div class="to_wrap">
            Touch Medical Media Limited, trading as Touch Medical Media, is a private limited company registered in England and Wales at The White House, Mill Road, Goring, Reading, England, RG8 9DD with
            registered number 08197142. © 2018 All rights reserved.
            <nav>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookies Policy</a></li>
                    <li><a href="#">Website Use</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </nav>
            <p>Touch Oncology is for informational purposes and should not be considered medical advice, diagnosis or treatment recommendations.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/all.min.css" rel="stylesheet">
</body>
</html>
