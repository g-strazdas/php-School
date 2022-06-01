<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokykla - mokinių pažymių vidurkiai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php include "nav.php"?>
<div>
    <br>
<form method="POST"  class="form-group mb-3" style=" margin-left: auto; margin-right: auto; width: 80%;">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="idNumber" placeholder="--ASMENS KODAS--" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="firstName" placeholder="--VARDAS--" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="lastName" placeholder="--PAVARDĖ--" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="courseNr" placeholder="--KLASĖ--" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="schoolName" placeholder="--MOKYKLOS PAVADINIMAS--" required>
    </div>
    <div class="form-group mb-3">
    <button class="btn btn-primary" name="submit">SPAUSDINTI</button>
    </div>
</form>
</div>

<div>
    <?php
    if(isset($_POST['submit']))
    {
        ?>
        <div>
            <table class="table table-borderless tbl">
                <thead><tr><th colspan="20">LIETUVOS RESPUBLIKA</th></tr></thead>
                <tbody>
                <tr>
                    <td class = "pavadinimas" colspan="20">MOKINIO PAŽYMĖJIMAS</td>
                </tr>
                <tr>
                    <td rowspan="9"></td>
                    <td colspan="5" rowspan="6"></td>
                    <td colspan="5"><b>PAŽYMĖJIMO NR.</b></td>
                    <td colspan="9">XX 0000000</td>
                </tr>
                <tr>
                    <td colspan="5"><b>Pavardė:</b></td>
                    <td colspan="9"><?=$_POST['lastName'];?></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Vardas:</b></td>
                    <td colspan="9"><?=$_POST['firstName'];?></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Klasė:</b></td><!--NiceToHave iš asmens kodo Gimimo data:-->
                    <td colspan="9"><?=$_POST['courseNr'];?></td>
                </tr>
                <tr>
                    <td colspan="5"><b>Galioja iki:</b></td>
                    <td colspan="9">2032.07.01</td>
                </tr>
                <tr>
                    <td colspan="5"><b>Asmens kodas:</b></td>
                    <td colspan="9"><?=$_POST['idNumber'];?></td>
                </tr>
                <tr>
                    <td colspan="13">Mokslo įstaigos pavadinimas, kodas:</td>
                </tr>
                <tr>
                    <td colspan="19"><b><?=$_POST['schoolName'];?></b></td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php
    }
    ?>
</div>
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
</body>
</html>