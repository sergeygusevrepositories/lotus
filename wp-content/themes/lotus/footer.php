<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage lotus
 */
?>
<footer class="footer">
    <div class="container">
        <div class="footer_row">
            <div class="footer_left">
                <img src="<?php bloginfo("template_directory")?>/img/f-logo.svg" alt="alt">
                <div class="footer_p">
                    © Lotus Psychiatry, 2020.
                </div>
                <a href="https://en-design.com.ua/" class="footer_site" target="_blank">
                    <img src="<?php bloginfo("template_directory")?>/img/lgo-ste.svg" alt="alt" class="footer_site--img">
                    <div class="footer_site--p">
                        Разработка сайта
                    </div>
                </a>
            </div>
            <nav class="footer_nav">
                <ul class="footer_ul">
                    <li class="footer_li"><a href="index.html">HOME</a></li>
                    <li class="footer_li"><a href="about.html">ABOUT US</a></li>
                    <li class="footer_li"><a href="services.html">SERVICES</a></li>
                    <li class="footer_li"><a href="appointment.html">schedule your appointment</a></li>
                    <li class="footer_li"><a href="payments.html">PAYMENTS</a></li>
                    <li class="footer_li"><a href="newpatient.html">New patient </a></li>
                    <li class="footer_li"><a href="resources.html">Resources</a></li>
                </ul>
            </nav>
            <div class="footer_right">
                <div class="footer_tel">
                    <img src="<?php bloginfo("template_directory")?>/img/f-tel.svg" alt="alt">
                    <a href="tel:617-992-4456" class="tel">617-992-4456
                    </a>
                </div>
                <div class="footer_geo">
                    <img src="<?php bloginfo("template_directory")?>/img/f-geo.svg" alt="alt">
                    <p>275 Grove St Suit 2-400
                        Newton, MA 02466</p>
                </div>
                <div class="footer_mail">
                    <img src="<?php bloginfo("template_directory")?>/img/f-mail.svg" alt="alt">
                    <a href="mailto:ef@lotuspsychiatric.com">ef@lotuspsychiatric.com</a>
                </div>
                <div class="footer_soc">
                    <a href="https://www.instagram.com/" class="footer_soc--item" target="_blank"><img src="<?php bloginfo("template_directory")?>/img/f-inst.svg" alt="alt"></a>
                    <a href="https://www.youtube.com/" class="footer_soc--item" target="_blank"><img src="<?php bloginfo("template_directory")?>/img/f-youtube.svg" alt="alt"></a>
                    <a href="https://www.facebook.com/" class="footer_soc--item" target="_blank"><img src="<?php bloginfo("template_directory")?>/img/f-fb.svg" alt="alt"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
