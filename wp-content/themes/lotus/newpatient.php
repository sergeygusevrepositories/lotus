<?php
/*
Template Name: New patient page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/businesswoman-talking-her-psychologist.jpg)">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="patient">
   <div class="container">
       <div class="patient_block">
           <div class="patient_block--top">
               <div class="patient_title">Thank you for choosing Lotus Psychiatry. <br>
                   In order for us to see you we need following information and consets from you:</div>
           </div>
           <div class="patient_block--center">
               <div class="resources_item">
                   <div class="resources_title">Insurance</div>
                   <div class="resources_p" style="max-width: 620px">You can either call our billing/sceduling department at <a href="tel:814-243-0414" class="resources_tel">814-243-0414</a>
                       , or fill out Insurance information form.
                   </div>
               </div>
               <div class="resources_item">
                   <div class="resources_title">Credit card</div>
                   <div class="resources_p">We require credit card on File. We would use it the day of the appointment to satisfy copayment if any. You can either fill out Credit card information form or call our office at <a href="tel:617-992-4456" class="resources_tel">617-992-4456.</a>
                   </div>
               </div>
               <div class="resources_item">
                   <div class="resources_title"> Intake Forms</div>
                   <div class="resources_p">Acknowledgment of Private Practices form, Intake Form, Consent to treat form, Authorization to Release information.</div>
               </div>
               <div class="resources_item">
                   <div class="resources_title">Additions Forms</div>
                   <div class="resources_p">In order for us to prescribe certain medications you might need to fill out additional forms on this page. Provider will let you know if that is nessesary.
                   </div>
                   <div class="resources_p">If you have any questions please call <a href="tel:617-992-4456" class="resources_tel">617-992-4456.</a>
                   </div>
               </div>
           </div>
           <div class="patient_block--bottom">
               <a href="/notice-of-privacy-practices/" class="patient_a btn">
                   Notice of Privacy Practices
               </a>
               <a href="#seven" data-fancybox class="patient_a btn">
                   Insurance information
               </a>
               <a href="/hipaa-notice-of-privacy-practices-acknowledgment-receipt" class="patient_a btn">
                   Acknowledgment of Private Practices
               </a>
               <a href="/credit-card-information" class="patient_a btn">
                   Credit card information
               </a>
               <a href="/intake-form" class="patient_a btn">
                   Intake Form
               </a>
               <a href="/controlled-substance-contract" class="patient_a btn">
                   Controlled Substance Contract
               </a>
               <a href="/consent-to-treat" class="patient_a btn">
                   Consent to treat
               </a>
               <a href="/benzodiazepines-treatment-contract" class="patient_a btn">
                   Benzodiazepines treatment contract
               </a>
               <a href="/authorization-to-release-obtain-information" class="patient_a btn">
                   Authorization to Release information
               </a>
               <a href="/stimulant-treatment-contract" class="patient_a btn">
                   Stimulant treatment contract
               </a>
               <a href="/informed-consent-for-telepsychiatry-telehealth-services" class="patient_a btn">
                   Consent to telehealth
               </a>
           </div>
       </div>
   </div>
</section>

<div style="display: none;">
    <div class="feedback" id="feedback" lang="en">
        <div class="feedback_title">Send message to Ekaterina Filatov</div>
        <form lang="en">
            <div class="feedback_form">
                <div>
                    <input type="text" class="feedback_input" placeholder="Name" lang="en">
                    <input type="tel" class="feedback_input" placeholder="Phone" lang="en">
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

<div style="display: none;">
    <div class="seven" id="seven">
        <form>
            <div class="seven_white">
                <div class="seven_title">Your Insurance Information</div>
                <div class="seven_form">
                    <div class="seven_col">
                        <input id="1-inp" type="text" class="seven_input" placeholder="First name" required>
                        <input id="2-inp" type="tel" class="seven_input" placeholder="Phone number" required>
                        <input id="3-inp" type="text" class="seven_input" placeholder="Sex" required>
                        <input id="4-inp" type="text" class="seven_input" placeholder="Insurance name" required>
                    </div>
                    <div class="seven_col">
                       <input id="5-inp" type="text" class="seven_input" placeholder="Last name" required>
                       <input id="6-inp" type="text" class="seven_input" placeholder="Date of birth" id="date" name="date" onfocus="(this.type='date')" onblur="if(!this.value)this.type='text'" required>
                       <input id="7-inp" type="text" class="seven_input" placeholder="Address" required>
                       <input id="8-inp" type="text" class="seven_input" placeholder="Subscriber ID" required>
                    </div>
                </div>
            </div>
            <div class="seven_blue">
              <div class="seven_politic">
                  <input id="1-chkb" type="checkbox" required checked>
                  <div class="seven_politic--p">* I have read Notice of <a href="/notice-of-privacy-practices/" target="_blank">Privacy Practices</a></div>
              </div>
               <div class="seven_btn">
                   <button id="submit12" class="btn sgus-submit">Send Information</button>
               </div>
            </div>
        </form>
    </div>
</div>

<?php get_footer(); ?>