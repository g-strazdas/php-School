<?php
    require 'data/nav.php';
//    require 'data/duomenys.php';
//    require 'data/stipendija.php';
//    require 'data/pazymejimas.php';

$this_page = $_SERVER['SCRIPT_NAME'];
echo '<ul>';
    foreach( $navigacija as $key=>$val ) {
    echo '<li><a href="'  . $val . '"';
        if( $val == $this_page) echo ' class="active"';
        echo '>' . $key  . '</a></li>';
    }
    echo '</ul>';
    ?>
