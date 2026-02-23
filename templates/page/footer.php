<?php

$options  = get_fields( 'options' );
$title    = $options['company']['company_title'];
$address  = $options['company']['company_address'];
$phone    = apply_filters( 'c_get_option', 'company_phone' );
$email    = apply_filters( 'c_get_option', 'company_email' );

?>

</main>

<footer class="c-footer" role="contentinfo">
    <div class="c-container-wide c-line-top c-line-bottom">
        <div class="c-container c-container-no-padding c-footer-main">
            <div class="c-row">
                <div class="c-col-6">
                     <a href="mailto:<?= $email ?>"><?= $email ?></a>
                </div>
                <div class="c-col-6" style="text-align: right;">
                    <a href="https://www.instagram.com/lalu.biel/" target="_blank">Instagram</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?= wp_footer() ?>

<!-- cookie notice
<div id="cookie-notice" class="c-cookie-notice c-text-block c-text-small">
	<?= apply_filters( 'c_get_option', 'archive_cookie_message' ); ?>
</div>
 -->

<!-- cookie stuff -->
<?php 

// Add tracking code
if(isset($_COOKIE['cookiebanner_min'])) {
    echo apply_filters( 'c_get_option', 'tracking_necessary' );
}

if(isset($_COOKIE['cookiebanner_all'])) {
    echo apply_filters( 'c_get_option', 'tracking_necessary' );
    echo apply_filters( 'c_get_option', 'tracking_optional' );
}
?>
<!-- cookie stuff end -->
</body>
</html>
