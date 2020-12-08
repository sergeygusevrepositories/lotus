<?php
/*
Template Name: Authorization to Release/Obtain Information page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1 inner-intro_h1--small"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
        <div class="forma_block">
            <div class="forma_div">
                <div class="forma_flex">
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Patient Name:</div>
                        <input id="1-inp" type="text" class="printed_name forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">State:</div>
                        <input id="2-inp" type="text" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Other Names Used:</div>
                        <input id="3-inp" type="text" class="forma_input forma_input__max">
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Zip Code:</div>
                        <input id="4-inp" type="number" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Street: </div>
                        <input id="5-inp" type="text" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Social Security</div>
                        <input id="6-inp" type="text" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">APT.#: </div>
                        <input id="7-inp" type="text" class="forma_input forma_input__max">
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Date of Birth: </div>
                        <input id="8-inp" type="date" id="date1" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">City/Town:</div>
                        <input id="9-inp" type="text" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Phone:</div>
                        <input id="10-inp" type="tel" class="forma_input forma_input__max" required>
                    </div>
                </div>
                <div class="forma_5">
                    <div class="forma_5--text"><b>Authorization to Release:</b> I authorize Lotus Psychiatry, LLC to receive and release information, including confidential communications, from or to the Person, Agency or Facility named below, either verbally or in writing. </div>
                    <div class="forma_5--text">Person, Agency or Facility (e.g., name and address of hospital, outpatient provider, residential program, other)</div>
                </div>
                <div class="forma_flex">
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Name:</div>
                        <input id="11-inp" type="text" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">State/Zip Code:</div>
                        <input id="12-inp" type="text" class="forma_input forma_input__max">
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Attention:</div>
                        <input id="13-inp" type="text" class="forma_input forma_input__max">
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Phone:</div>
                        <input id="14-inp" type="tel" class="forma_input forma_input__max">
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Street: </div>
                        <input id="15-inp" type="text" class="forma_input forma_input__max">
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">Fax:</div>
                        <input id="16-inp" type="number" class="forma_input forma_input__max" required>
                    </div>
                    <div class="forma_label forma_label5">
                        <div class="forma_label--p">City/Town: </div>
                        <input id="17-inp" type="text" class="forma_input forma_input__max">
                    </div>
                </div>
            </div>
            <div class="forma_mental--line forma_mental--line5"></div>
            <div>
                <div class="forma_mental">
                    <div class="forma_b">Check to indicate the information you want shared: (check all that apply)</div>
                    <div class="forma_check2--row">
                        <div class="forma_flex">
                            <label class="forma_check forma_check5">
                                <input id="1-chkb" type="checkbox">
                                <div class="forma_check--p">Mental Health Diagnosis and Treatment provided by a Psychiatrist; Psychologist; Mental Health Clinical Nurse Specialist; Licensed Social Worker Counseling; all other Licensed Mental Health Providers.</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="2-chkb" type="checkbox">
                                <div class="forma_check--p">Entire Mental Health Record, excluding Psychotherapy Notes which require a separate authorization </div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="3-chkb" type="checkbox">
                                <div class="forma_check--p">Entire Record (Medical and Mental Health)</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="4-chkb" type="checkbox">
                                <div class="forma_check--p">Treatment Plans</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="5-chkb" type="checkbox">
                                <div class="forma_check--p">Discharge Summary</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="6-chkb" type="checkbox">
                                <div class="forma_check--p">Neuropsych Testing</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="7-chkb" type="checkbox">
                                <div class="forma_check--p">Transfer Summary</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="8-chkb" type="checkbox">
                                <div class="forma_check--p">Admission Documentation</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="9-chkb" type="checkbox">
                                <div class="forma_check--p">Physical Exam</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="10-chkb" type="checkbox">
                                <div class="forma_check--p">Lab Reports</div>
                            </label>
                        </div>
                        <div class="forma_label">
                            <div class="forma_label--p">Other (please specify) / additional information:</div>
                            <input id="18-inp" type="text" class="forma_input forma_input__max">
                        </div>
                    </div>
                </div>

            </div>
            <div class="forma_mental--line forma_mental--line5"></div>
            <div class="forma_div">
                <div class="forma_b">Dates of the information you want shared: (Specify dates)</div>
                <div class="forma_p">Dates of Requested Information:</div>
                <div class="forma_check2--row">
                    <div class="forma_flex">
                        <div class="forma_label forma_label5">
                            <div class="forma_label--p">From:</div>
                            <input id="19-inp" type="text" class="forma_input forma_input__max" required>
                        </div>
                        <div class="forma_label forma_label5">
                            <div class="forma_label--p">To:</div>
                            <input id="20-inp" type="text" class="forma_input forma_input__max" required>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="forma_mental">
                    <div class="forma_b">Please initial to indicate you give permission to release the following information if present in your record: (initial all that apply)</div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">HIV test results (Authorization required for each release request.)</div>
                        <input id="21-inp" type="text" class="forma_input forma_input__initial" required="">
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Alcohol and Drug Abuse Records Protected by Federal Confidentiality Rules 42 CFR Part 2 Federal rules prohibit any further disclosure of this information unless disclosure is expressly permitted by written authorization of the person to whom it pertains or as otherwise permitted by 42 CFR Part 2.</div>
                        <input id="22-inp" type="text" class="forma_input forma_input__initial" required="">
                    </div>
                    <div class="forma_b">Purpose of the Release:</div>
                    <div class="forma_check2--row">
                        <div class="forma_flex">
                            <label class="forma_check forma_check5">
                                <input id="11-chkb" type="checkbox">
                                <div class="forma_check--p">Personal Use</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="12-chkb" type="checkbox">
                                <div class="forma_check--p">Coordinate care</div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="13-chkb" type="checkbox">
                                <div class="forma_check--p">Referral </div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="14-chkb" type="checkbox">
                                <div class="forma_check--p">Facilitate billing </div>
                            </label>
                            <label class="forma_check forma_check5">
                                <input id="15-chkb" type="checkbox">
                                <div class="forma_check--p">Obtain insurance, financial or other benefits</div>
                            </label>

                        </div>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Other purpose (please specify):</div>
                        <input id="23-inp" type="text" class="forma_input forma_input__max">
                    </div>
                </div>
            </div>
            <div class="forma_mental--line forma_mental--line5"></div>
            <div>
                <div class="forma_mental">
                    <div class="forma_b"> I understand that:</div>
                    <div class="forma_p" style="font-size: 16px;margin-top: 20px"> •	I have a right to revoke this authorization at any time. </div>
                    <div class="forma_p" style="font-size: 16px">•	If I revoke this authorization, I must do so in writing and present it to </div>
                    <div class="forma_p" style="font-size: 16px">•	The revocation will not apply to information that has already been released pursuant to this authorization. </div>
                    <div class="forma_p" style="font-size: 16px"> •	The revocation will not apply to my insurance company when the law provides my insurer with the right to contest a claim under my policy. </div>
                    <div class="forma_p" style="font-size: 16px">•	Once the above information is released, the recipient may redisclose it and the information may not be protected by federal or state privacy laws or regulations. </div>
                    <div class="forma_p" style="font-size: 16px"> •	Authorizing the disclosure of the information identified above is voluntary.</div>
                    <div class="forma_p" style="font-size: 16px">•	I need not sign this form to receive treatment or services from Lotus Psychiatry, LLC and/or the other named person, facility or agency; however, lack of ability to share or obtain information may prevent Lotus Psychiatry, LLC and/or the other named person, facility or agency, from providing appropriate and necessary care.</div>
                </div>
            </div>
            <div class="forma_mental--line"></div>
            <div class="forma_mental">
                <div class="forma_label">
                    <div class="forma_label--p">This authorization will expire (specify a date, time period or an event)</div>
                    <input id="24-inp" type="text" class="forma_input forma_input__max" required="">
                    <div class="forma_label--p">or, if nothing is specified, it will expire one year from date of signing. </div>
                </div>
                <div class="forma_label--mt forma_b">Signature / Authorization: </div>
                <div class="forma_flex forma_label--mt">
                    <div class="forma_label">
                        <div class="forma_label--p">Your signature or <br> Personal Representative’s signature </div>
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
                    <div class="forma_label">
                        <div class="forma_label--p">Date</div>
                        <input id="25-inp" type="date" id="date2" class="forma_input" required="">
                    </div>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Print name of signer</div>
                    <input id="26-inp" type="text" class="forma_input forma_input__max" required="">
                </div>
                <div class="forma_label--mt forma_b">The following information is needed if signed by a personal representative:</div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Type of authority (e.g., court appointed, custodial parent):</div>
                    <input id="27-inp" type="text" class="forma_input forma_input__max" required="">
                </div>
            </div>
            <div class="forma_bottom">
                <div class="forma_submit">
                    <button id="submit5" type="submit" class="btn sgus-submit">Submit</button>
                    <button id="submit52" type="submit" href="#modal2" data-fancybox style="display: none"></button>
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

<script> document.getElementById('date1').valueAsDate = new Date();</script>
<script> document.getElementById('date2').valueAsDate = new Date();</script>

<?php get_footer(); ?>