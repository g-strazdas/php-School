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

<body>

<div class="container-fluid p-0 bg-info">
     <div class="row">
         <h2 class="text-center text-white p-2">Mokinių duomenys</h2>
     </div>
    <?php include "students.php";  include "nav.php"; $keys = array_keys($students['1']);?>

<div class="container-fluid bg-info">
    <table class="table table-hover table-bordered table-sm table-striped">
        <thead class="table-primary text-center align-middle">
            <tr>
                <?php foreach($keys as $header):?>
                    <th><?=$header;?></th>
                <?php endforeach;?>
            </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach($students as $number=>$student):?>
            <tr class="table-light">
                <?php foreach($student as $key=>$value):
                if($key != 'Vardas' and $key != 'Pavardė'){
                    echo '<td class = "text-center">'.$value.'</td>';
                } else {
                    echo '<td class = "text-left px-3">'.$value.'</td>';
                }
                    ?>
<!--                    <td>--><?//=$value;?><!--</td>-->
                <?php endforeach;?>
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

</body>

</html>