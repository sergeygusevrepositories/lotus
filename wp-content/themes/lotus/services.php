<?php
/*
Template Name: Services page
*/
get_header(); ?>
        
<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="services">
    <div class="container">
       <div class="services_title">
           Diagnosis and Treatment Specialization Include
       </div>
        <div class="services_row">
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s1.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Anxiety
                    </div>
                </div>
                <div class="services_item--text">
                    a feeling of worry, nervousness, typically about ab imminent event or something with an uncertain outcome
                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s2.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Depression
                    </div>
                </div>
                <div class="services_item--text">
                    mood disorder that causes a persistent feeling of sadness and loss of interest

                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s3.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Mood disorder
                    </div>
                </div>
                <div class="services_item--text">
                    general emotional state or mood is distorted or inconsistent with your circumstances and interferes with your ability to function
                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s4.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Substance use disorder
                    </div>
                </div>
                <div class="services_item--text">
                    patterns of symptoms resulting from the use of a substance that you continue to take, despite experiencing problems as a result
                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s5.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Attention deficit disorder
                    </div>
                </div>
                <div class="services_item--text">
                    neurological disorder that causes a range of behavior problems such as difficulty attending to instruction, focusing on schoolwork, keeping up with assignments, following instructions, completing tasks and social interaction
                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s6.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Obsessive-compulsive disorder(OCD)
                    </div>
                </div>
                <div class="services_item--text">
                    a personality disorder characterized by excessive orderliness, perfectionism, attention to details, and a need for control in relating to others

                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s7.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Trauma and PTSD
                    </div>
                </div>
                <div class="services_item--text">
                    disorder that develops in some people who have experienced a shocking, scary, or dangerous event
                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s8.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Schizophrenia and psychosis

                    </div>
                </div>
                <div class="services_item--text">
                    long-term mental disorder of a type involving a breakdown in the relation between thought, emotion, and behavior, leading to faulty perception, inappropriate actions and feelings, withdrawal from reality
                </div>
            </div>
            <div class="services_item">
                <div class="services_item--top">
                    <div class="services_item--img">
                        <img src="<?php bloginfo("template_directory")?>/img/s9.svg" alt="alt">
                    </div>
                    <div class="services_item--title">
                        Sleep disorders
                    </div>
                </div>
                <div class="services_item--text">
                    problems with the quality, timing, and amount of sleep, which result in daytime distress and impairment in functioning
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
                <a href="appointment.html" class="btn">
                    schedule your appointment
                </a>
            </div>
        </div>
    </div>
</section>

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

<div style="display: none;">
    <div class="feedback" id="feedback">
        <div class="feedback_title">Send message to Ekaterina Filatov</div>
        <form>
            <div class="feedback_form">
                <div>
                    <input type="text" class="feedback_input" placeholder="Name">
                    <input type="tel" class="feedback_input" placeholder="Phone">
                </div>
                <textarea class="feedback_textarea" placeholder="Text"></textarea>
            </div>
            <div class="feedback_btn">
                <button type="submit" class="btn">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>