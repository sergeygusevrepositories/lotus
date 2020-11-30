<?php
/*
 * Добавляем новое меню в Админ Консоль
 */

add_action( 'admin_menu', 'sgus_Add_My_Admin_Link' );

function sgus_Add_My_Admin_Link() {
    add_menu_page(
        'Send PDF options page',
        'Send PDF',
        'manage_options',
        'send-pdf/includes/sgus-first-acp-page.php'
    );
}

