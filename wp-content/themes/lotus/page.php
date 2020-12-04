<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage lotus
 */
get_header(); ?>
    <section class="intro">
        <div class="container">
            <div class="intro_block">
                <div class="intro_h1">
                    “ I am not what happened to me,
                    I am what I choose to become.”
                </div>
                <div class="intro_p">Carl Jung</div>
            </div>
        </div>
    </section>

    <section class="hello">
        <div class="container">
            <div class="hello_row">
                <div class="hello_img">
                    <img src="<?php bloginfo("template_directory")?>/img/OBJECTS.svg" alt="alt">
                </div>
                <div class="hello_text">
                    <b class="hello_text--title">Hello and Welcome!</b>
                    <p> Whether you are struggling with an existing psychiatric condition or are looking for answers, we are here to help. At Lotus Psychiatry we value confidentiality and we are passionate about our work.</p>
                    <p>At this time all appointments are virtual (telehealth).
                    </p>
                    <p>We use a secure, HIPAA- compliant portal called doxy.me. All you need to join an appointment is an electronic Device that has a camera and a microphone and stable internet connection.</p>
                    <p>If you have any questions, please call our office during normal office hours (10 am-6 pm) or communicate with us here on the website. You can fill out new patient forms, schedule or reschedule your appointment, provide insurance information, settle your copayment, send a message to provider or go to your telehealth appointment.</p>
                    <div class="hello_text--row">
                        <a href="https://doxy.me/efilatov" class="btn hello_btn">go to your visit</a>
                        <a href="https://doxy.me/efilatov" class="btn hello_btn">Patient portal</a>
                        <a href="#feedback" data-fancybox class="btn hello_btn">Message provider</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bottom">
        <div class="container">
            <div class="bottom_block">
                <img src="<?php bloginfo("template_directory")?>/img/safe.jpg" alt="alt">
                <div class="bottom_text">
                    <p>To ensure safety of patients and staff
                        all appointments are held via telehealth until
                        further notice
                    </p>
                    <a href="/appointment" class="btn">
                        schedule your appointment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="lotus">
        <div class="container">
            <div class="lotus_row">
                <div class="lotus_img">
                    <img src="<?php bloginfo("template_directory")?>/img/psihiatri.svg" alt="alt">
                </div>
                <div class="lotus_text">
                    <p>
                        At <b>Lotus Psychiatry</b>, we strive to provide high quality care to help you live a healthier, happier and more productive life. Your treatment will be individualized and tailored to your needs. We will always protect your privacy and treat you in caring and respectful manner. We are here to help and support you on your journey to better mental health.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <div style="display: none;">
        <div class="feedback" id="feedback">
            <div class="feedback_title">Send message to Ekaterina Filatov</div>
            <form>
                <div class="feedback_form">
                    <div>
                        <input id="1-inp" type="text" class="feedback_input" placeholder="Name">
                        <input id="2-inp" type="tel" class="feedback_input" placeholder="Phone">
                    </div>
                    <textarea id="1-area" class="feedback_textarea" placeholder="Text"></textarea>
                </div>
                <div class="feedback_btn">
                    <button id="submit13" class="btn sgus-submit">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div style="display: none">
        <div class="modal1" id="modal1">
            <div class="modal">
                <div class="modal_block">
                    <div class="modal_p">Your message has been sent</div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>