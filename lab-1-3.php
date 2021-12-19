<?php
    define('NUM_E', 2.71828);
    echo("Число е равно ".NUM_E.'<br>');
    $num_el = NUM_E;
    echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
    $num_el = "Число е";
    echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
    $num_el = 50;
    echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
    $num_el = false;
    echo("\$num_el = ".$num_el.' -'.gettype($num_el).'<br>');
?>
