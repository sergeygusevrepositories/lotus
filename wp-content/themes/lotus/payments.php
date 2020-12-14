<?php
/*
Template Name: Payments page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="payments">
    <div class="container">
        <div class="payments_title">We accept following methods of payments:</div>
        <div class="payments_row">
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Cash, check
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Cigna
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Medicare
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    PayPal Credit card
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    AETNA
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Commonwealth Care Alliance
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Optum
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Tufts Medicare Preferred
                    disorder
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Beacon Health Strategies

                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    MBHP
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    THP
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Humana/Tricare
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Blue Cross Blue Shield MA
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    Medicaid
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    THHP
                </div>
            </div>
            <div class="payments_item">
                <div class="payments_item--img">
                    <img src="<?php bloginfo("template_directory")?>/img/ok.svg" alt="alt">
                </div>
                <div class="payments_item--text">
                    United Health Care
                </div>
            </div>
        </div>
    </div>
</section>

<div class="payments_line">
    <div class="container">
        <div class="payments_p">
            Please contact billing department
            with any insurance related questions at <a href="tel:617-992-4556">617-992-4556</a>
        </div>
    </div>
</div>

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