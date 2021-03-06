<?php
/*
Template Name: HIPAA Notice of Privacy Practices Acknowledgment Receipt page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1 inner-intro_h1--small"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
       <div class="forma_block">
          <div class="forma_top">
              I hereby acknowledge that I have read and received a copy of Lotus Psychiatry, LLC HIPAA Notice of Privacy Practices.
          </div>
          <div class="forma_div">
             <div class="forma_flex">
                 <div class="forma_label">
                     <div class="forma_label--p">Signature of Patient or <br>
                         Legal Representative</div>
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
                     <input type="date" id="date2" class="forma_input" required>
                 </div>
                 <div class="forma_label">
                     <div class="forma_label--p">Printed Name of Patient’s <br>Representative (if applicable)</div>
                     <input id="printed_name" type="text" class="printed_name printed_name forma_input" required style="position: relative;top: -8px;">
                 </div>
             </div>
          </div>
           <div class="forma_mental--line"></div>
           <div class="forma_div">
               <div class="forma_b">Relationship to Patient (if applicable):</div>
               <div class="forma_check2--row">
                   <div class="forma_flex">
                       <label class="forma_check forma_check2">
                           <input id="parent-chkb" type="checkbox">
                           <div class="forma_check--p">Parent or guardian of unemancipated minor</div>
                       </label>
                       <label class="forma_check forma_check2">
                           <input id="executor-chkb" type="checkbox">
                           <div class="forma_check--p">Executor or administrator of decedent's estate</div>
                       </label>
                       <label class="forma_check forma_check2">
                           <input id="court-chkb" type="checkbox">
                           <div class="forma_check--p">Court appointed guardian</div>
                       </label>
                       <label class="forma_check forma_check2">
                           <input id="power-chkb" type="checkbox">
                           <div class="forma_check--p">Power of Attorney</div>
                       </label>
                   </div>
               </div>
           </div>
           <div class="forma_blue">FOR OFFICE USE ONLY</div>
           <div class="forma_mental">
               <div class="forma_b">We attempted to obtain written acknowledgement of receipt of our
                   Notice of Privacy Practices on the following date,</div>
               <div class="forma_label">
                   <input type="date" id="date1" class="forma_input" required>
               </div>
               <div class="forma_b">but acknowledgment could not be obtained because:</div>
               <div class="forma_label forma_label--mt">
                   <div class="forma_label--p">Patient/representative refused to sign</div>
                   <input id="patient-inp" type="text" class="forma_input forma_input__max" required>
               </div>
               <div class="forma_label forma_label--mt">
                   <div class="forma_label--p">Emergency situation prevented us from obtaining acknowledgement
                       at this time (will attempt again at a later date)</div>
                   <input id="emergency-inp" type="text" class="forma_input forma_input__max" required>
               </div>
               <div class="forma_label forma_label--mt">
                   <div class="forma_label--p">Reason for refusal</div>
                   <input id="reason-inp" type="text" class="forma_input forma_input__max" required>
               </div>
               <div class="forma_label">
                   <div class="forma_label--p">Communication barriers prohibited obtaining acknowledgement (Explain):</div>
                   <textarea id="communication-area" class="forma_input forma_area forma_area1">
                   </textarea>
               </div>
           </div>
           <div class="forma_bottom">
               <div class="forma_submit">
                   <button id="submit2" type="submit" class="btn sgus-submit">Submit</button>
                   <button id="submit22" href="#modal2" data-fancybox style="display: none"></button>
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
       </div>
    </div>
</div>

<script> document.getElementById('date1').valueAsDate = new Date();
    document.getElementById('date2').valueAsDate = new Date();</script>

<?php get_footer(); ?>