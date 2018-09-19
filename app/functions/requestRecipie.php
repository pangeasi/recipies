<?php
    include("../libs/simple_html_dom.php");
    
    $url = "https://cocinina.com/?s=" . $_GET['ingredient'];

    $html = file_get_html($url);
    
    
    foreach($html->find("h2.entry-title") as $val) {
        echo $val->innertext . '<br>';
    } 



?>