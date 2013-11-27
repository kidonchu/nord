        <footer class="footer" role="contentinfo">
            <div class="container">
                <ul class="footer-nav list-inline">
                    <li><a href="<?php echo home_url('donate') ?>">DONATE</a></li>
                    <li><a href="<?php echo home_url('subscribe') ?>">subscribe</a></li>
                    <li><a href="<?php echo home_url('volunteer') ?>">volunteer</a></li>
                    <li><a href="<?php echo home_url('contact-us') ?>">contact</a></li>
                    <li>|</li>
                    <li><a href="<?php echo esc_url(home_url('e-newsletters'))?>">e-newsletters</a></li>
                    <li><a href="<?php echo esc_url(home_url('partners'))?>">partners</a></li>
                    <li><a href="<?php echo get_stylesheet_directory_uri().'/assets/img/brochure.pdf' ?>" target="_blank">brochure</a></li>
                    <li><a href="<?php echo home_url('policy') ?>">policy</a></li>
                </ul>
                <div class="social-icons">
                    <ul class="list-inline social-icon-list">
                        <li class="social-icon-item"><a target="_blank" class="social-icon-link social-icon-facebook" href="http://facebook.com/NORDorg">facebook</a></li>
                        <li class="social-icon-item"><a target="_blank" class="social-icon-link social-icon-twitter" href="http://twitter.com/N_0_R_D">twitter</a></li>
                        <li class="social-icon-item"><a class="social-icon-link social-icon-subscribe" href="<?php echo home_url('subscribe') ?>">subscribe</a></li>
                    </ul>
                </div>
                <p class="copyright">
                    &copy; <?php echo date('Y') ?> <?php bloginfo('name') ?><br>
                    A.P.E.R. Awareness, Prevention, Education, and Research<br>
                    11018 Aqua Vista Street #19, Studio City, CA 91602<br>
                    mvj4nord@stop-esrd.org
                </p>
            </div>
        </footer>

<?php wp_footer() ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
</html>

