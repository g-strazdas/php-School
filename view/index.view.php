<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duomenys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet"
</head>
<body>
<h1>Mokyklos mokinių pažymių vidurkiai</h1>
<section>
        <div>
            <?php setlocale(LC_CTYPE, 'lt_LT.UTF8');?>
            <?php date_default_timezone_set('Europe/Vilnius');?>
            <?php $header = array_keys($catalog['nr1']);?>
            <?php //var_dump($header); echo $header[0]?>
            <table class="tbl_loc table table-hover">
                <thead>
                <tr class="align-middle">
                    <th><?=ucfirst($header[0]);?></th>
                    <th>Kodas</th>
                    <th><?=ucfirst($header[1]);?></th>
                    <th><?=ucfirst($header[2]);?></th>
                    <th>Kontrolinių darbų vidurkis</th>
                    <th>Duomenų formavimo data</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($catalog as $number=>$student):?>
                <?php $value = array_values($student);?>
                    <tr>
                        <td><?=$value[0];?></td>
                        <td><?=substr(sha1(mt_rand()),17,6);?></td>
                        <td><?=ucfirst($value[1]); //Ąžuolo vardo nepasitaikė, bet...?></td>
                        <td><?=mb_strtoupper($value[2], $encoding ='UTF-8');?></td>
                        <td><?=($value[3] + $value[4] + $value[5])/3;?></td>
                        <td><?=date("Y-m-d");;?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>




</section>

</body>
</html>