<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moksleivio pažymėjimas</title>
    <link href="/src/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/data/style.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid p-0 bg-info">
    <div class="row">
        <h2 class="text-center text-white p-2">Mokinio pažymėjimo spausdinimas</h2>
    </div>
    <?php include "students.php";  include "nav.php";?>

</div>
<div class="container-fluid p-0 bg-info">
    <form method="POST"  class="form-group bg-info w-50" style=" margin-left: auto; margin-right: auto;">
        <div class="form-group mb-3">
            <input type="text" class="form-control bg-white p-1" name="idNumber" placeholder="--ASMENS KODAS--" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control bg-white p-1" name="firstName" placeholder="--VARDAS--" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control bg-white p-1" name="lastName" placeholder="--PAVARDĖ--" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control bg-white p-1" name="courseNr" placeholder="--KLASĖ--" required>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control bg-white p-1" name="schoolName" placeholder="--MOKYKLOS PAVADINIMAS--" required>
        </div>
        <div class="form-group mb-3">
            <button class="btn btn-danger p-1 mb-3" name="submit">SPAUSDINTI</button>
        </div>
    </form>
    <div class="row bg-info py-0"></div>
    </div>


<div>
    <?php
    if(isset($_POST['submit']))
    {
        ?>
        <div class="container-fluid p-0 bg-info">

            <table class="table table-borderless tbl my-0">
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
            <div class="row bg-info py-2"></div>
        </div>
        <?php
    }
    ?>
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