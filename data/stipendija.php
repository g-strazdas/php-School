<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokinių stipendijos apskaičiavimas</title>
    <link href="/src/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/data/style.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid p-0 bg-info">
    <div class="row">
        <h2 class="text-center text-white p-2">Mokinių stipendijos apskaičiavimas</h2>
    </div>
    <?php include "students.php";  include "nav.php";?>
<div class="container-fluid bg-info p-0">
<table class="table table-hover table-bordered table-sm table-striped table-light">
    <tbody>
    <?php foreach($students as $student):?>
    <?php $vidurkis=round((($student['Matematika']+$student['Anglų k.']+$student['Lietuvių k.'])/3), $precision=2);?>
    <?php $payout = 100; if ($vidurkis >= 5 and $vidurkis < 8) {$payout=80;} elseif ($vidurkis <= 5) {$payout=0;}?>
    <?php if($payout !=0)
        if ($student['Lankomumas'] > 1 and $student['Lankomumas'] < 10) {$payout /= 0.1;} elseif ($student['Lankomumas'] > 10) {$payout=0;}?>
     <tr class="table-light">
         <td class = "text-left px-3"><?= $student['Vardas'],' ',$student['Pavardė'];?></td>
         <td class = "text-left px-3"><?= 'Pažymių vidurkis: ',$vidurkis;?></td>
         <td class = "text-left px-3"><?= 'Praleista pamokų: ',$student['Lankomumas'];?></td>
         <td class = "text-left px-3"><?= 'Stipendija: ',$payout,' EUR';?></td>
        <?php endforeach;?></tr>
    </tbody>
</table>
</div>
<div class="container-fluid p-0">
    <div class="d-grid d-md-block text-center bg-warning">
        <?php
        require 'nav.php';
        $this_page = $_SERVER['SCRIPT_NAME'];
        foreach($navigacija as $key=>$val)
            if (strpos($val, $this_page) === False){echo '<a class="btn btn-primary btn-sm m-3" href="'.$val.'" type='.'"button">'.$key.'</a>';}
        ?>
    </div>
</div>
</div>
</body>
</html>
