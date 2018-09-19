<?php
    define('APP', 'app' . DIRECTORY_SEPARATOR);
    require APP . 'core/config.php';
    require APP . 'core/Application.class.php';
    require APP . 'core/Controller.class.php';
    $app = new Application();
?>