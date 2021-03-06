<?php
/*
Template Name: Intake Form page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
        <div class="forma_block">
            <div class="forma_top">
                General information
            </div>
            <div class="forma_div">
                <div class="forma_flex">
                    <div class="forma_label">
                        <div class="forma_label--p">First Name</div>
                        <input id="first-inp" type="text" class="printed_name forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Last Name</div>
                        <input id="last-inp" type="text" class="forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Gender</div>
                        <input id="gender-inp" type="text" class="forma_input" required>
                    </div>
                </div>
                <div class="forma_flex">
                    <div class="forma_label">
                        <div class="forma_label--p">Date of Birth (mm/dd/yyyy)</div>
                        <input type="date" id="date" class="forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Social Security Number</div>
                        <input id="social-inp" type="number" class="forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Address</div>
                        <input id="address-inp" type="text" class="forma_input" required>
                    </div>
                </div>
                <div class="forma_flex">
                    <div class="forma_label">
                        <div class="forma_label--p">City</div>
                        <input id="city-inp" type="text" class="forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">State</div>
                        <input id="state-inp" type="text" class="forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Zip Code</div>
                        <input id="zip-inp" type="number" class="forma_input" required>
                    </div>
                </div>
                <div class="forma_flex">
                    <div class="forma_label">
                        <div class="forma_label--p">Main Phone</div>
                        <input id="main-phone-inp" type="tel" class="forma_input" required>
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Other Phone</div>
                        <input id="other-phone-inp" type="tel" class="forma_input">
                    </div>
                    <div class="forma_label">
                        <div class="forma_label--p">Email</div>
                        <input id="email-inp" type="email" class="forma_input">
                    </div>
                </div>
            </div>
            <div class="forma_blue">EMERGENCY CONTACT</div>
            <div class="forma_div">
                <div class="forma_flex">
                    <div class="forma_label sgus-25">
                        <div class="forma_label--p">First Name</div>
                        <input id="contract-first-inp" type="text" class="forma_input forma_input__min" required>
                    </div>
                    <div class="forma_label sgus-25">
                        <div class="forma_label--p">Last Name</div>
                        <input id="contract-last-inp" type="text" class="forma_input forma_input__min" required>
                    </div>
                    <div class="forma_label sgus-25">
                        <div class="forma_label--p">Phone</div>
                        <input id="contract-phone-inp" type="tel" class="forma_input forma_input__min" required>
                    </div>
                    <div class="forma_label sgus-25 sgus-last">
                        <div class="forma_label--p">Relationship</div>
                        <input id="contract-relation-inp" type="text" class="forma_input forma_input__min" required>
                    </div>
                    <div class="forma_label sgus-100">
                        <div class="forma_label--p">Do you authorize this person to discuss care or treatment with the office in the case of an emergency?</div>
                        <label class="forma_radio">
                            <div class="forma_radio--item">
                                <input type="radio" name="bull1" required>
                                <div class="forma_radio--p">YES</div>
                            </div>
                            <div class="forma_radio--item">
                                <input type="radio" name="bull1" required>
                                <div class="forma_radio--p">NO</div>
                            </div>
                        </label>
                    </div>
                </div>

            </div>
            <div class="forma_blue">MENTAL HEALTH HISTORY/STATUS</div>
            <div class="forma_mental">
                <div class="forma_label">
                    <div class="forma_label--p">What problems are you seeking help for?</div>
                    <textarea id="problems-area" class="forma_input forma_area forma_area1">
                    </textarea>
                </div>
                <div class="forma_mental--red">Past Mental Health Treatment</div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Have you ever been hospitalized for psychiatric reasons?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull2" required>
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull2" required>
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">If yes, when and where?</div>
                    <textarea id="where-area" class="forma_input forma_area forma_area2">
                    </textarea>
                </div>
                <div class="forma_mental--line"></div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Have you ever had outpatient treatment by a psychiatrist?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull3" required>
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull3" required>
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">If yes, when and by whom?</div>
                    <textarea id="whom-area" class="forma_input forma_area forma_area2">
                    </textarea>
                </div>
                <div class="forma_mental--line"></div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Have you ever received counseling or psychotherapy in the past?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull4" required>
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull4" required>
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">If yes, when and where?</div>
                    <textarea id="when-area" class="forma_input forma_area forma_area2">
                    </textarea>
                </div>
                <div class="forma_mental--red">Please List any psychiatric medication you have taken or are taking:</div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Medication; Date; Side Effects/Benefits</div>
                    <textarea id="medication-area" class="forma_input forma_area forma_area1">
                    </textarea>
                </div>
            </div>
            <div class="forma_mental--red">Please Check all that apply:</div>
            <div class="forma_div">
                <div class="forma_flex">
                    <label class="forma_check">
                        <input id="depressed-chkb" type="checkbox">
                        <div class="forma_check--p">Depressed mood</div>
                    </label>
                    <label class="forma_check">
                        <input id="excessive-chkb" type="checkbox">
                        <div class="forma_check--p">Excessive talking</div>
                    </label>
                    <label class="forma_check">
                        <input id="unreasonable-chkb" type="checkbox">
                        <div class="forma_check--p">Unreasonable fear</div>
                    </label>
                    <label class="forma_check">
                        <input id="lost-chkb" type="checkbox">
                        <div class="forma_check--p">Lost or gained weight</div>
                    </label>
                    <label class="forma_check">
                        <input id="racing-chkb" type="checkbox">
                        <div class="forma_check--p">Racing thoughts</div>
                    </label>
                    <label class="forma_check">
                        <input id="fear-chkb" type="checkbox">
                        <div class="forma_check--p">Fear of social situations</div>
                    </label>
                    <label class="forma_check">
                        <input id="not-chkb" type="checkbox">
                        <div class="forma_check--p">Not enough sleep</div>
                    </label>
                    <label class="forma_check">
                        <input id="easily-chkb" type="checkbox">
                        <div class="forma_check--p">Easily distracted</div>
                    </label>
                    <label class="forma_check">
                        <input id="repetitive-chkb" type="checkbox">
                        <div class="forma_check--p">Repetitive thoughts/behavior</div>
                    </label>
                    <label class="forma_check">
                        <input id="too-chkb" type="checkbox">
                        <div class="forma_check--p">Too much sleep</div>
                    </label>
                    <label class="forma_check">
                        <input id="over-chkb" type="checkbox">
                        <div class="forma_check--p">Over working yourself</div>
                    </label>
                    <label class="forma_check">
                        <input id="upsetting-chkb" type="checkbox">
                        <div class="forma_check--p">Upsetting memories</div>
                    </label>
                    <label class="forma_check">
                        <input id="sluggish-chkb" type="checkbox">
                        <div class="forma_check--p">Sluggish</div>
                    </label>
                    <label class="forma_check">
                        <input id="impulsive-chkb" type="checkbox">
                        <div class="forma_check--p">Impulsive behavior</div>
                    </label>
                    <label class="forma_check">
                        <input id="recent-chkb" type="checkbox">
                        <div class="forma_check--p">Recent loss/grief</div>
                    </label>
                    <label class="forma_check">
                        <input id="agitated-chkb" type="checkbox">
                        <div class="forma_check--p">Agitated</div>
                    </label>
                    <label class="forma_check">
                        <input id="see-chkb" type="checkbox">
                        <div class="forma_check--p">See/hear things that are not real</div>
                    </label>
                    <label class="forma_check">
                        <input id="work-chkb" type="checkbox">
                        <div class="forma_check--p">Work/school problems</div>
                    </label>
                    <label class="forma_check">
                        <input id="never-chkb" type="checkbox">
                        <div class="forma_check--p">Never tired</div>
                    </label>
                    <label class="forma_check">
                        <input id="suspect-chkb" type="checkbox">
                        <div class="forma_check--p">Suspect things may not be real</div>
                    </label>
                    <label class="forma_check">
                        <input id="violent-chkb" type="checkbox">
                        <div class="forma_check--p">Violent thoughts/behaviors</div>
                    </label>
                    <label class="forma_check">
                        <input id="cannot-chkb" type="checkbox">
                        <div class="forma_check--p">Cannot concentrate</div>
                    </label>
                    <label class="forma_check">
                        <input id="tense-chkb" type="checkbox">
                        <div class="forma_check--p">Tense/unable to relax</div>
                    </label>
                    <label class="forma_check">
                        <input id="self-chkb" type="checkbox">
                        <div class="forma_check--p">Self harm</div>
                    </label>
                    <label class="forma_check">
                        <input id="afraid-chkb" type="checkbox">
                        <div class="forma_check--p">Afraid to leave home</div>
                    </label>
                    <label class="forma_check">
                        <input id="worry-chkb" type="checkbox">
                        <div class="forma_check--p">Excessive worry</div>
                    </label>
                    <label class="forma_check">
                        <input id="anger-chkb" type="checkbox">
                        <div class="forma_check--p">Anger outburst</div>
                    </label>
                    <label class="forma_check">
                        <input id="inflated-chkb" type="checkbox">
                        <div class="forma_check--p">Inflated self esteem</div>
                    </label>
                    <label class="forma_check">
                        <input id="panic-chkb" type="checkbox">
                        <div class="forma_check--p">Panic attacks</div>
                    </label>
                    <label class="forma_check">
                        <input id="careless-chkb" type="checkbox">
                        <div class="forma_check--p">Careless, high-risk behavior</div>
                    </label>
                    <label class="forma_check">
                        <input id="feel-chkb" type="checkbox">
                        <div class="forma_check--p">Feel guilty or worthless</div>
                    </label>
                    <label class="forma_check">
                        <input id="thoughts-chkb" type="checkbox">
                        <div class="forma_check--p">Thoughts of death or suicide</div>
                    </label>
                    <label class="forma_check">
                        <input id="financial-chkb" type="checkbox">
                        <div class="forma_check--p">Financial problems</div>
                    </label>
                </div>
            </div>
            <div class="forma_blue">GENERAL MEDICAL HISTORY</div>
            <div class="forma_mental">
                <div class="forma_label">
                    <div class="forma_label--p">Primary Care Physician:</div>
                    <input id="primary-inp" type="text" class="forma_input forma_input__max" required>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Please list any medical problems you may have below:</div>
                    <textarea id="please-area" class="forma_input forma_area forma_area1">
                    </textarea>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Please list any serious medical procedures you have had in the past:</div>
                    <textarea id="list-area" class="forma_input forma_area forma_area1">
                    </textarea>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Are you on any medications for any general medical problems you may have?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull5" required>
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull5" required>
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">If yes, which ones?</div>
                    <textarea id="which-area" class="forma_input forma_area forma_area2">
                    </textarea>
                </div>
                <div class="forma_mental--line"></div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Do you have any allergies to medications?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull6" required>
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull6" required>
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">If yes, which ones?</div>
                    <textarea id="yes-area" class="forma_input forma_area forma_area2">
                    </textarea>
                </div>
                <div class="forma_mental--red">Alcohol, Drug, and Tobacco Use</div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Describe your use of alcohol:</div>
                    <input id="describe-inp" type="text" class="forma_input forma_input__max" required>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Describe your use of recreational drugs:</div>
                    <input id="recreational-inp" type="text" class="forma_input forma_input__max" required>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Describe your use of tobacco:</div>
                    <input id="tobacco-inp" type="text" class="forma_input forma_input__max" required>
                </div>

                <div class="forma_mental--red">Family Medical History</div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">List any history of illness (mental or other) and substance abuse among blood relatives:
                        Mother’s side; Father’s side</div>
                    <textarea id="history-area" class="forma_input forma_area forma_area1">
                    </textarea>
                </div>
            </div>
            <div class="forma_blue">SOCIAL HISTORY</div>
            <div class="forma_mental">
                <div class="forma_label">
                    <div class="forma_label--p">Birth place:</div>
                    <input id="birth-place-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Where did you grow up?</div>
                    <input id="grow-up-inp" type="text" class="forma_input forma_input__max">
                </div>

                <div class="forma_label">
                    <div class="forma_label--p">Did your parents get divorced as a child?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull7">
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull7">
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">If so, how old were you when they separated?</div>
                    <input id="separated-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label sgus-clear-both">
                    <div class="forma_label--p">Father’s occupation growing up:</div>
                    <input id="fathers-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Mother’s occupation growing up:</div>
                    <input id="mothers-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">How many siblings do you have?</div>
                    <input id="siblings-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Did you have any early development problems as a child?</div>
                    <input id="development-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Are you/were you a victim of any form of physical/sexual/emotional abuse?</div>
                    <input id="victim-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Highest Level of Education:</div>
                    <input id="highest-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Please list the last three jobs you have had below:</div>
                    <input id="jobs-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Current employment:</div>
                    <input id="current-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Are you currently in a romantic relationship?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull8">
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull8">
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Duration:</div>
                    <input id="duration-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Describe your relationship:</div>
                    <input id="desc-rel-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Spouse or partner’s current occupation:</div>
                    <input id="spouse-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label forma_label--mt sgus-clear-both">
                    <div class="forma_label--p">Do you have any children?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull9">
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull9">
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">How many?</div>
                    <input id="how-many-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">What are your children’s names and ages?</div>
                    <input id="childrens-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">What activities do you enjoy doing?</div>
                    <input id="activities-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_label forma_label--mt sgus-clear-both">
                    <div class="forma_label--p">Have you ever been convicted of any crimes, served time, or been on probation?</div>
                    <label class="forma_radio">
                        <div class="forma_radio--item">
                            <input type="radio" name="bull10">
                            <div class="forma_radio--p">YES</div>
                        </div>
                        <div class="forma_radio--item">
                            <input type="radio" name="bull10">
                            <div class="forma_radio--p">NO</div>
                        </div>
                    </label>
                </div>
                <div class="forma_label forma_label--mt">
                    <div class="forma_label--p">Details:</div>
                    <input id="details-inp" type="text" class="forma_input forma_input__max">
                </div>
                <div class="forma_mental--red">Please list any additional notes that you think would be helpful for treatment below:</div>
                <div class="forma_label forma_label--mt">
                    <textarea id="additional-area" class="forma_input forma_area forma_area1">
                    </textarea>
                </div>
            </div>

            <div class="forma_close3">
                <div class="forma_mental">
                    <div class="forma_label">
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
            <div class="forma_submit">
                <button id="submit3" type="submit" class="btn sgus-submit">Submit</button>
                <button id="submit32" type="submit" href="#modal2" data-fancybox style="display: none"></button>
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
        </div>
    </div>
</div>

<?php get_footer(); ?>