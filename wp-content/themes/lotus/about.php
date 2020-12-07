<?php
/*
Template Name: About page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="about">
    <div class="container">
        <div class="about_block">
            <div class="about_text">
                <h3>Ekaterina Filatov, MSN, PMHNP-BC.</h3>
                <p> Ekaterina is originally from Russia and came to the U.S. at 19 years old to further pursue her education. She initially attended Curry College for her BSN before getting her Master's Degree in Psychiatric/Mental Health Nursing (PMHNP) from Regis College. Ekaterina has been working in mental health field for over 10 years. At this time, Ekaterina practices at her private practice, as well as an outpatient clinic and she is also a visiting clinical instructor for Regis College.</p>
                <p> Ekaterina offer personalized treatment that is sensitive to individual cultural background. Her style is holistic, collaborative and empowering. Her main goal is for her patients to live healthier, happier and more productive lives.</p>
            </div>
            <div class="about_img">
               <img src="<?php bloginfo("template_directory")?>/img/about-doc.jpg" alt="alt">
               <div class="about_img--text">
                   <p>
                       Ekaterina Filatov MSN, PMHNP-BC
                       Fluent in English and Russian
                   </p>
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