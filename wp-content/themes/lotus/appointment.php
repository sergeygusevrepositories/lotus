<?php
/*
Template Name: Appointment page
*/
get_header(); ?>
        
<section class="inner-intro" style="background-image: url(<?php bloginfo("template_directory")?>/img/businesswoman-talking-her-psychologist.jpg)">
    <h1 class="inner-intro_h1"><?php the_title();?></h1>
</section>

<section class="appoint">
   <div class="container">
       <div class="appoint_block">
           <div class="appoint_title">
               Please indicate when would you like to be seen
           </div>
               <form>
                   <div class="appoint_form">
                       <div>
                           <input id="1-inp" type="text" class="appoint_input" placeholder="Name">
                           <input id="2-inp" type="tel" class="appoint_input" placeholder="Phone">
                           <input id="3-inp" type="tel" class="appoint_input" placeholder="E-mail">
                           <input id="4-inp" id="date" class="appoint_input" type="date">
                       </div>
                       <textarea id="1-area" class="appoint_textarea" placeholder="Text"></textarea>
                   </div>
                   <div class="appoint_p">
                       You can send a message to scheduling department <b>24/7</b> or to call <b>814-243-0414</b>  M-F 9-5
                   </div>
                   <div class="appoint_btn">
                       <button id="submit14" type="submit" class="btn sgus-submit">Send Request</button>
                       <button id="submit142" href="#modal3" data-fancybox style="display: none" ></button>
                   </div>
               </form>
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

<div style="display: none">
    <div id="modal3" class="modal1">
        <div class="modal">
            <div class="modal_block">
                <div class="modal_p">Спасибо ваш запрос принят</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>