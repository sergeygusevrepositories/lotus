<?php
/*
Template Name: Controlled substance contract page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1 inner-intro_h1--small"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
        <div class="forma_block">
            <div class="forma_div">
                <div class="forma_42">
                    <div class="forma_4--text">
                        <p>Controlled substances are drugs or chemicals that have the potential to be addictive or habit-forming. Controlled substances have a high potential for abuse and may lead to severe psychological or physical dependence.</p>

                        <p> Schedule II substances include ADHD stimulant medications including Ritalin, Adderall, Concerta, Vyvanse, Mydayis, etc.</p>

                        <p>Schedule IV substances include all Benzodiazepines such as Valium, Klonopin, Xanax, Ativan, etc.</p>

                        <p>Prescriptions for controlled substances will be electronically prescribed and will only provide enough medication until your next scheduled appointment. If your controlled substance is running low, you need to call our office for an appointment to refill your medication.</p>

                        <p>Controlled substances must be handled with care. The following rules apply to all patients who are prescribed controlled substances:</p>

                        <p> • No early refills for lost or stolen prescriptions. It is your responsibility to safely secure your medication.</p>

                        <p>•	No bridges on stimulants will be given. </p>

                        <p>•	Controlled substances must be taken exactly as prescribed and not increased at the patients’ discretion.</p>

                        <p>•	Patient may not share controlled medication with family members or friends. </p>

                        <p>•	Ekaterina Filatov, PMHNP has the right to request a urine toxicology screen at any time if your treatment requires controlled substances.</p>

                        <p> •	Ekaterina Filatov, PMHNP has the right to stop prescribing your controlled substance medication if your toxicology screen reveals illicit drug use or alcohol use.</p>

                        <p>•	Ekaterina Filatov, PMHNP has the right to discharge you from the practice if you violate any terms of this contract.</p>

                    </div>
                </div>
                <div class="forma_label--p">I have read and agree to the above terms.</div>
                <div class="forma_flex forma_label--mt">
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Client Printed Name </div>
                        <input id="1-inp" type="text" class="printed_name forma_input" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Date</div>
                        <input id="2-inp" type="date" id="date1" class="forma_input" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Client Signature</div>
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
                <div class="forma_flex forma_label--mt">
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Provider name Ekaterina <br> Filatov, PMHNP-BC</div>
                        <div class="forma_sign4"></div>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Date</div>
                        <div class="forma_sign3"></div>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Patient’s Signature</div>
                        <div class="forma_sign2"></div>
                    </div>
                </div>
            </div>
            <div class="forma_bottom">
                <div class="forma_submit">
                    <button id="submit9" type="submit" class="btn sgus-submit">Submit</button>
                    <button id="submit92" type="submit" href="#modal2" data-fancybox style="display: none"></button>
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

<script>
    document.getElementById('date1').valueAsDate = new Date();
    document.getElementById('date2').valueAsDate = new Date();
</script>

<?php get_footer(); ?>