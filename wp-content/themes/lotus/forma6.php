<?php
/*
Template Name: Informed Consent for TelePsychiatry/Telehealth Services page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1 inner-intro_h1--small"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
        <div class="forma_block">
            <div>
                <div class="forma_4">
                    <div class="forma_4--text">
                        <p>I understand that telehealth is the use of electronic information and communication technologies by a health care provider to deliver services to an individual when he/she is located at a different site than the provider.</p>

                        <p>I understand that the laws that protect the privacy and the confidentiality of patient medical information also apply to telehealth services which may include general medicine and behavioral health. As always, my insurance carrier will have access to medical records for quality review/audits. </p>

                        <p>I understand that I will be responsible for any copayments or coinsurance that may apply to my telehealth visit. </p>

                        <p>I understand that I have the right to withhold or withdraw my consent to the use of telehealth in the course of my care at any time, without affecting my right to future care or treatment. I may also revoke my consent orally or in writing at any time by contacting Lotus Psychiatry, LLC. </p>

                        <p><span style="color: #000">TELEPSYCHIATRY:</span> I have been given information regarding the use of Telepsychiatry/ Telehealth and consent to participate in services utilizing this technology. If I am under the age of 18, such information was shared with and consent is obtained from my parent or guardian. I understand I have the right to refuse to participate in telepsychiatry services. I understand that telepsychiatry services may reduce any delays in services, need to travel or other risks associated with not having the services provided by telepsychiatry/telehealth services. Furthermore, I am made aware that each telepsychiatry/telehealth session shall not be recorded without my consent. </p>
                    </div>
                </div>
            </div>
            <div class="forma_div">
                <div class="forma_label--p">I agree to participate in telepsychiatry/telehealth services.
                </div>
                <div class="forma_flex forma_label--mt">
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Patient’s Name</div>
                        <input id="1-inp" type="text" class="printed_name forma_input" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Date</div>
                        <input id="2-inp" type="date" id="date" class="forma_input" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Patient’s Signature</div>
                        <div class="forma_sign">
                            <div id="signature-pad" class="signature-pad">
                                <div class="signature-pad--body">
                                    <canvas id="signature-canvas"></canvas>
                                </div>
                                <div class="signature-pad--footer">
                                    <div class="signature-pad--actions">
                                        <div>
                                            <button type="button" class="button clear" data-action="clear">Clear</button>
                                            <button type="button" class="button" data-action="undo">Undo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forma_bottom">
                <div class="forma_submit">
                    <button id="submit6" type="submit" class="btn sgus-submit">Submit</button>
                    <button id="submit62" type="submit" href="#modal2" data-fancybox style="display: none"></button>
                </div>
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

<div style="display: none;">
    <div class="modal1" id="modal2">
        <div class="modal">
            <div class="modal_block">
                <div class="modal_p">Thank you. Your form was submitted</div>
            </div>
            <div class="modal_btn">
                <a href="/newpatient" class="btn">
                    Заполнить остальные формы
                </a>
            </div>
        </div>
    </div>
</div>

<script> document.getElementById('date').valueAsDate = new Date();</script>

<?php get_footer(); ?>