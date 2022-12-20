<?php
    define("SITE_ROOT", "/var/www/html/ElaboratoTW/sito/");

    require_once(SITE_ROOT.'bootstrap.php');

    $templateParams["pageid"] = "settings";
    $templateParams["title"] = "Uv-Profile";
    $templateParams["javascript"] = "../templates/main_settings/settings.js";
    if(!isUserLoggedIn()){
        header("location: login.php");
    }

    $templateParams["pieces"] = array(
        SITE_ROOT . 'templates/header/header.php',
        SITE_ROOT . 'templates/main_settings/settings.php',
        SITE_ROOT . 'templates/footer/footer.php'
    );

    require_once SITE_ROOT . 'templates/base.php';
?>