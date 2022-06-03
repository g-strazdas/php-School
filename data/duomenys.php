<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokinių duomenys</title>
    <link href="/src/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/data/style.css" rel="stylesheet">
</head>
<?php include "students.php"?>
<?php include "nav.php"?>
<body>
<h3 style="text-align: center">Mokyklos mokinių sąrašas</h3>
<section>
<div>
    <?php $keys = array_keys($students['1']);?>
    <?php //var_dump($keys); echo $keys[0]?>
    <table class="table table-hover table-bordered table-sm">
        <thead class="table-primary">
            <tr>
                <?php foreach($keys as $header):?>
                    <th><?=$header;?></th>
                <?php endforeach;?>
            </tr>
        </thead>
        <tbody>
        <?php foreach($students as $number=>$student):?>
            <tr>
                <?php foreach($student as $key=>$value):?>
                    <td><?=$value;?></td>
                <?php endforeach;?>
            <?php endforeach;?></tr>
        </tbody>
    </table>
</div>
</section>
</body>
<div class="navi">
<?php
$this_page = $_SERVER['SCRIPT_NAME'];
echo '<ul>';
    foreach( $navigacija as $key=>$val ) {
    echo '<li><a href="'  . $val . '"';
        if( $val == $this_page) echo ' class="active"';
        echo '>' . $key  . '</a></li>' . PHP_EOL ;
    }
    echo '</ul>' ;
    ?>
</div>
</html>