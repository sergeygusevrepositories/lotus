<?php
/*
Template Name: Credit card information page
*/
get_header(); ?>

<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/about-intro.jpg);">
    <h1 class="inner-intro_h1 inner-intro_h1--small"><?php the_title();?></h1>
</section>

<section class="forma">
    <div class="container">
        <div class="forma_block">
           <div class="forma_div">
            <div class="forma_mental">
                <div class="forma_label--p">I authorize the following card to be used for co-pays and fee’s incurred during the time I am a patient with Lotus Psychiatry</div>
            </div>
            <div class="forma_flex forma_label--mt">
                <div class="forma_label">
                    <div class="forma_label--p">Card Number </div>
                    <input id="1-inp" type="number" class="forma_input" required>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">Expires</div>
                    <input id="2-inp" type="text" class="forma_input" required>
                </div>
                <div class="forma_label">
                    <div class="forma_label--p">CVV</div>
                    <input id="3-inp" type="number" class="forma_input" required>
                </div>
            </div>
               <div class="forma_flex forma_label--mt">
                   <div class="forma_label">
                       <div class="forma_label--p">Printed Name</div>
                       <input id="4-inp" type="text" class="forma_input" required>
                   </div>
                   <div class="forma_label">
                       <div class="forma_label--p">Date</div>
                       <input id="5-inp" type="date" id="date2" class="forma_input date" required>
                   </div>
                   <div class="forma_label">
                       <div class="forma_label--p">Patient’s Signature</div>
                       <div class="forma_sign"></div>
                   </div>
               </div>
            <div class="forma_mental">
                <div class="forma_p" style="font-size: 16px">I understand that the office of Lotus Psychiatry will attempt to bill my insurance, however <span style="color: #000">if my insurance does not pay, for whatever reason, I am responsible for any remaining balance.</span> This may include deductibles, copays, or out of pocket expenses.</div>
            </div>
        </div>
            <div class="forma_bottom">
                <div class="forma_submit">
                    <button id="submit8" type="submit" href="#modal2" data-fancybox class="btn sgus-submit">Submit</button>
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