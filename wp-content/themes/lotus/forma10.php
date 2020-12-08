<?php
/*
Template Name: Benzodiazepines treatment contract page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1 inner-intro_h1--small"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
        <div class="forma_block">
           <div class="forma_mental">
               <div class="forma_label">
                   <div class="forma_label--p">City</div>
                   <input id="1-inp" type="text" class="forma_input forma_input__max" required>
               </div>
               <div class="forma_label">
                   <div class="forma_label--p">This BENZODIAZEPINE medication</div>
                   <input id="2-inp" type="text" class="forma_input forma_input__max" required>
               </div>
               <div class="forma_label">
                   <div class="forma_label--p">is being used to manage or control symptoms of</div>
                   <input id="3-inp" type="text" class="forma_input forma_input__max" required>
               </div>
           </div>
            <div class="forma_div">
                <div>
                    <div class="forma_4--text">
                        <p style="color: #000">I understand that the use of this medication can cause addiction and carries other risks such as drug interactions, sedation, confusion, poor memory, increased response time and impaired coordination which may increase the risk of motor vehicle accidents and falls. If I am over 65 years of age, I may be especially sensitive to these side-effects. In most situations, benzodiazepines are not recommended for use beyond 4-6 weeks. Given the risks associated with this class of medications, my provider may reduce or safely stop prescribing benzodiazepines to me at any time during the course of my treatment based on how I respond to treatment and whether continued use could likely harm me. While on benzodiazepine medication, I agree to abide by the following conditions: </p>

                        <p> 1.	Receiving medications from a single prescriber.  Ekaterina Filatov, PMHNP will be the only provider who will prescribe the BENZODIAZEPINE medication for me. I will not seek to obtain benzodiazepines from any other prescriber. In case of a situation where I receive a BENZODIAZEPINE from another prescriber, I will notify Ekaterina Filatov, PMHNP as soon as possible. 2. Taking the medication as prescribed. I will take the medication at the dose and frequency ordered by my prescriber. I will not increase the dose or frequency of my medication on my own. I agree to keep track of my use of these medications and how well they are working for me to share with my doctor at appointments, e.g. by maintaining a sleep diary.</p>

                        <p>2.	NOT consuming other sedating medications, opioid pain medications, illicit substances or alcohol with this medication. Use of benzodiazepines with other medications that may cause drowsiness such as opioid pain relievers or with alcohol can be serious and life-threatening. Naloxone will not reverse the effects of benzodiazepine overdose. I will not combine my medication with other drugs without consulting my doctor first nor will I combine my benzodiazepine medication with alcohol. </p>

                        <p>3.	NOT abruptly stopping my medication. Discontinuing benzodiazepines suddenly after extended use can cause potentially serious withdrawal symptoms. The likelihood of experiencing withdrawal can be reduced by tapering or gradually reducing the dose. I will consult with my provider before stopping my medication to discuss a tapering plan. </p>

                        <p>4.	Maintaining regular appointment attendance and participating in consultations. I understand that I need to be present at all appointments with my proveder. I must also be willing to fully participate in other treatments or consultations, such as psychotherapy, recommended by my provider. </p>

                        <p>5.	Receiving medications from a single pharmacy. I will fill my prescriptions at a single pharmacy of my choice. If I decide to move to a different pharmacy, I will notify my prescriber.</p>

                        <p>6.	Storing and disposing of the medication safely. I will store my medications in a secure location at all times. I will not share or give my prescribed benzodiazepine medication to another person nor will I accept these medications from anyone else. If I have benzodiazepine medication remaining that I no longer need (e.g. in the case that my medication is discontinued or changed), I will take it to my pharmacy for safe disposal. I understand that I may not obtain an early refill or replacement supplies for lost medication. </p>

                        <p>7.	Being responsible for medication supply and refilling on time. I will manage my medication supply by planning and booking my appointments in advance. If I run out of medication early (e.g. by missing an appointment or taking more than prescribed), extra doses may not be prescribed in which case I will have to wait until my next prescription is due. I will bring my pill bottles with any remaining pills of the medication to each appointment.
                            </p>

                        <p>8.	Complying with clinic adherence monitoring policies. I understand that my provider may ask me for a urine drug screening sample or a count of my pills at any time. These measures are performed for all patients to improve the safety of prescribing benzodiazepines. Further refills/prescriptions will be tied to completion of requested screening.</p>

                        <p>9.	Consent to share information with other health care professionals if medically necessary. I agree that my doctor has the authority to share information with other health professionals involved in my care if necessary. </p>

                        <p>10.	 Termination of this agreement. If my provider determines that the medication is causing me more harm than the relief it provides, my provider has the right to discontinue my benzodiazepine medication in a safe way. I also acknowledge that I could lose my right to treatment from my provider if I break any part of this agreement. This document was discussed between me and my provider. I was given the opportunity to ask questions. I affirm my understanding and acceptance of the terms of this agreement by signing this document.</p>
                    </div>
                </div>
                <div class="forma_flex forma_label--mt">
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Patient’s Name</div>
                        <input id="4-inp" type="text" class="printed_name forma_input" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Date</div>
                        <input id="5-inp" type="date" id="date1" class="forma_input" required>
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
                        <div class="forma_label--p">Provider Signature</div>
                        <div class="forma_sign2"></div>
                    </div>
                </div>
            </div>
            <div class="forma_bottom">
                <div class="forma_submit">
                    <button id="submit10" type="submit" class="btn sgus-submit">Submit</button>
                    <button id="submit102" type="submit" href="#modal2" data-fancybox style="display: none"></button>
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

<?php get_footer(); ?>>