<?php
    //DESCRIPCIÓN DE LA APP
    define("TITLE","recipies app");
    //RUTAS
    define('URL_PUBLIC_FOLDER', 'public');
    define('URL_PROTOCOL', 'http://');
    define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
    define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
    define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
    // CONSTANTES PARA LA BASE DE DATOS
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','123456');
    define('DB_NAME','recipies');
    define('DB_OPTIONS',array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ));
?>