<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagrindinis</title>
    <link href="./src/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        <div class="d-grid d-md-block mt-0 text-center bg-warning">
<?php
    require 'data/nav.php';
    $this_page = $_SERVER['SCRIPT_NAME'];
    foreach($navigacija as $key=>$val)
        if (strpos($val, $this_page) === False){echo '<a class="btn btn-primary btn-sm m-3" href="'.$val.'" type='.'"button">'.$key.'</a>';}
    ?>
        </div>
    <div class="row">
        <img src="./src/img/img236.png" class="img-fluid vh-100" alt="...">
    </div>

    </div>
</body>
</html>