<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokykla - mokinių pažymių vidurkiai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/data/style.css" rel="stylesheet">
</head>
<?php include "students.php"?>
<?php include "nav.php"?>
<body>

<div>
    <ol class="list-styled" style="margin-left: 9%;">
    <?php foreach($students as $student):?>
        <?php $vidurkis=round((($student['Matematika']+$student['Anglų k.']+$student['Lietuvių k.'])/3), $precision=2);?>
        <?php $payout = 100; if ($vidurkis >= 5 and $vidurkis < 8) {$payout=80;} elseif ($vidurkis <= 5) {$payout=0;}?>
        <?php if($payout !=0)
         if ($student['Lankomumas'] > 1 and $student['Lankomumas'] < 10) {$payout /= 0.1;} elseif ($student['Lankomumas'] > 10) {$payout=0;}?>

        <li><?= $student['Vardas'],' ',$student['Pavardė'],',  pažymių vidurkis: ',$vidurkis,',  praleista: ',$student['Lankomumas'],',  stipendija: ',$payout,' EUR'?></li>
    <?php endforeach;?>
    </ol>
</div>

<?php
$this_page = $_SERVER['SCRIPT_NAME'];
echo '<ul>';
foreach( $navigacija as $key=>$val ) {
    echo '<li><a href="'  . $val . '"';
    if( $val == $this_page) echo ' class="active"';
    echo '>' . $key  . '</a></li>';
}
echo '</ul>';
?>

</body>
</html>
