<?php get_header(); ?>
<div class="loginpage__container">
    <form name="loginform" id="loginform" action="<?php bloginfo('url') ?>/wp-login.php" method="post"> 
        <label>Логин<br /> 
        <input type="text" name="log" id="user_login" /></label> 
        <label>Пароль<br /> 
        <input type="password" name="pwd" id="user_pass" /></label> 
        <label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Запомнить меня</label>
        <input type="submit" name="wp-submit" id="wp-submit" value="Войти" /> 
        <input type="hidden" name="redirect_to" value="<?php bloginfo('url') ?>/wp-admin/" /> 
        <input type="hidden" name="testcookie" value="1" />
    </form>
</div>
<?php get_footer();s ?>