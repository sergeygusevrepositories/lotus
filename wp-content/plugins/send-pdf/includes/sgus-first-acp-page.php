<div class="wrap">
    <form action="/" style="width: 300px; display: flex; flex-direction: column">
        <label style="display: flex; justify-content: space-between; margin-bottom: 7px" for="server">Server
            <input type="text" id="server" value="<?php echo get_option('smtp_server')?>"/>
        </label>
        <label style="display: flex; justify-content: space-between; margin-bottom: 7px" for="login">Login
            <input type="text" id="login" value="<?php echo get_option('smtp_user')?>" />
        </label>
        <label style="display: flex; justify-content: space-between; margin-bottom: 7px" for="password">Password
            <input type="password" id="password" value="<?php echo get_option('smtp_password')?>" />
        </label>
        <button type="submit" name="send">Изменить</button>
    </form>
    <?php
//    $result = update_option('smtp_server', 'smtp.gmail.com');
//
////    $result = add_option('smtp_server', 'smtp.gmail.com');
//    var_dump($result);
//
//    $result = get_option('smtp_server');
//    echo get_option('smtp_server');

    ?>
</div>