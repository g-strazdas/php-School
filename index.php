<?php
    require 'data/nav.php';
//    require 'data/duomenys.php';
//    require 'data/stipendija.php';
//    require 'data/pazymejimas.php';

$this_page = $_SERVER['SCRIPT_NAME'];
echo '<ul style="font-family:system-ui; font-size:30px;">';
    foreach( $navigacija as $key=>$val ) {
    echo '<li><a href="'  . $val . '"';
        if( $val == $this_page) echo ' class="active"';
        echo '>' . $key  . '</a></li>';
    }
    echo '</ul>';
    ?>
