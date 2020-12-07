<?php
/*
Template Name: Resources page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="resources">
    <div class="container">
        <div class="resources_block">
            <div class="resources_item">
                <div class="resources_title">Getting 24 Hour Emergency and Crisis Support - 1 (877) 382-1609</div>
                <div class="resources_p">If you or a family member are experiencing a mental health or substance use disorder crisis, the Emergency Services Program/Mobile Crisis Intervention (ESP/MCI) is available 24/7.  Anyone may contact ESP/MCI for assistance.</div>
                <div class="resources_p">
                    Call toll-free at
                    <a href="tel:1(877) 382-1609" class="resources_tel">1  (877) 382-1609</a>, anytime, day or night.
                </div>
            </div>
            <div class="resources_item">
                <div class="resources_title">National Suicide Prevention Lifeline - 1-800-273-8255</div>
                <div class="resources_p">The Lifeline provides 24/7, free and confidential support for people in distress, prevention and crisis resources.</div>
            </div>
            <div class="resources_item">
                <div class="resources_title">Massachusetts Network of Care:</div>
                <div class="resources_p">An online resource that provides a comprehensive, searchable directory to help Massachusetts residents find information on behavioral health services and treatment in their communities.
                <br>
                    Learn more at
                    <a href="https://massachusetts.networkofcare.org/mh/" class="resources_a">www.massachusetts.networkofcare.org</a>
                </div>
            </div>
            <div class="resources_item">
                <div class="resources_title">NAMI Compass:</div>
                <div class="resources_p">COMPASS is the information and referral helpline at NAMI Massachusetts. They provide resources and support to help people navigate the complex mental health system and problem solve in difficult circumstances.</div>
                <div class="resources_p">Call the helpline at <a href="tel:617-704-6264" class="resources_tel">617-704-6264</a> or <a href="tel:1-800-370-9085" class="resources_tel">1-800-370-9085</a>, or email them at </div>
                <div class="resources_p">
                    <a href="mailto:compass@namimass.org" class="resources_a">compass@namimass.org</a>
                    <a href="#" class="resources_a">Learn More about NAMI Compass.</a>
                </div>
            </div>
            <div class="resources_item">
                <div class="resources_title">Massachusetts Substance Use Helpline:</div>
                <div class="resources_p">The Helpline is the only statewide, public resource for finding substance use treatment and recovery services. Helpline services are free and confidential.</div>
                <div class="resources_p">Call the helpline at <a href="tel:1-800-327-5050" class="resources_tel">1-800-327-5050</a> or <a href="tel:1-800-370-9085" class="resources_tel">1-800-370-9085</a>, or <a href="#" class="resources_a">visit the website to learn more.</a> </div>
            </div>
            <div class="resources_item">
                <div class="resources_title">SAMHSA National Helpline:</div>
                <div class="resources_p">SAMHSA’s National Helpline, <a href="#" class="resources_tel">1-800-662-HELP (4357)</a>, (also known as the Treatment Referral Routing Service) or TTY: <a href="tel:1-800-487-4889" class="resources_tel">1-800-487-4889</a> is a confidential, free, 24-hour-a-day, 365-day-a-year, information service, in English and Spanish, for individuals and family members facing mental and/or substance use disorders. This service provides referrals to local treatment facilities, support groups, and community-based organizations. Callers can also order free publications and other information.</div>
                <div class="resources_p"><a href="#" class="resources_a">visit the website to learn more.</a> </div>
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