<?php
/*
Template Name: Stimulant treatment contract page
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
                    <div class="forma_label--p">This STIMULANT medication</div>
                    <input type="text" class="forma_input forma_input__max" required>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">is being used to manage or control symptoms of</div>
                    <input type="text" class="forma_input forma_input__max" required>
                </div>
            </div>
            <div class="forma_div">
                <div>
                    <div class="forma_4--text">
                        <p style="color: #000">Stimulant treatment for ADHD is used to decrease your ADHD symptoms and to improve what you’re able to do each day. Along with this treatment, other medical care may be prescribed to help improve your ability to do daily activities. This may include exercise, psychological counseling or other therapies or treatment.</p>

                        <p style="color: #000">I understand that I have the following responsibilities and agree to adhere to all of the following rules while I am under the care of Lotus Psychiatry, LLC: </p>

                        <p>1.	I will take medications as prescribed.</p>

                        <p>2.	I will not increase or decrease without the approval of my physician/APRN. </p>

                        <p>3.	I will not obtain medications from several physicians, but my physician/APRN only. (Under certain circumstances, if I obtain any additional narcotic from other physicians such as primary care physician or emergency room physician, then I will immediately notify the Center for ADHD, Inc.) </p>

                        <p>4.	I will not share the medication with anyone including family members. </p>

                        <p>5.	I will not sell the medication.</p>

                        <p>6.	I will not get replacement from any lost or stolen medication regardless of the circumstance. </p>

                        <p>7.	I will not get early refills. </p>

                        <p>8.	I will notify Lotus Psychiatry, LLC if I abuse alcohol or use other illicit drugs along with ADHD medication.</p>

                        <p> 9.	I agree to periodic random drug screening tests.</p>

                        <p> 10.	 I agree that my provider may stop prescribing the medication if my drug screen is positive for illicit substance or alcohol, or negative for my prescribed medication.</p>

                        <p>11.	 I agree to periodic random pill counts. </p>

                        <p> 12.	 I agree that my provider may stop prescribing the medication if pill count is off.</p>

                        <p>13.	 I agree to participate in adjunctive management programs such as: psychological testing, counseling therapy, behavioral modification, school based interventions, job modifications if recommended by the physician/APRN. </p>

                        <p>14.	 I will not request prescription refills when the clinic is closed after hours or on weekends.
                        </p>
                        <p> 15.	 If I am pregnant or intend to get pregnant, I am required to notify my provider immediately to discuss tapering off stimulants that could potentially harm the fetus. I understand that failure to do so may result in discharge from the clinic. I will not hold the clinic responsible for any harm that may occur to me and/or my unborn. </p>

                        <p style="color: #000">
                            I understand that this physician/APRN may stop prescribing the medication or change the treatment plan if I failed to follow the above recommendations. I have read this document, understand and have had all my questions answered satisfactorily. I consent to the use of stimulants to help control my ADHD and I understand that my treatment with stimulants I will be carried out as described above.
                        </p>


                    </div>
                </div>
                <div class="forma_flex forma_label--mt">
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Patient’s Name</div>
                        <input type="text" class="forma_input" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Date</div>
                        <input type="date" id="date1" class="forma_input date" required>
                    </div>
                    <div class="forma_label forma_label--mt">
                        <div class="forma_label--p">Patient’s Signature</div>
                        <div class="forma_sign"></div>
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
                        <div class="forma_label--p">Provider signature</div>
                        <div class="forma_sign2"></div>
                    </div>
                </div>
            </div>
            <div class="forma_bottom">
                <div class="forma_submit">
                    <button id="submit11" type="submit" href="#modal2" data-fancybox class="btn sgus-submit">Submit</button>
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
                <div class="modal_p">Ваша форма добавлена</div>
            </div>
            <div class="modal_btn">
                <a href="newpatient.html" class="btn">
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