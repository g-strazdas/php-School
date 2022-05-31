<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokykla - mokinių pažymių vidurkiai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./data/duomenys.css" rel="stylesheet"
</head>
<?php
$students = [
	'1'=>[
		'Asmens kodas'=>'61010290120',
		'Vardas'=>'Kamilė',
		'Pavardė'=>'Backūnaitė',
		'El. paštas'=>'k.backunaite@gmail.com',
		'Matematika'=>10,
		'Anglų k.'=>10,
		'Lietuvių k.'=>9,
        'Lankomumas'=>0],
	'2'=>[
		'Asmens kodas'=>'61001220121',
		'Vardas'=>'Irma',
		'Pavardė'=>'Bujauskaitė',
		'El. paštas'=>'m.bujauskaite@gmail.com',
		'Matematika'=>9,
		'Anglų k.'=>7,
		'Lietuvių k.'=>10,
        'Lankomumas'=>0],
	'3'=>[
		'Asmens kodas'=>'61003167777',
		'Vardas'=>'Danas',
		'Pavardė'=>'Dinkevičius',
		'El. paštas'=>'d.dinkevicius@gmail.com',
		'Matematika'=>10,
		'Anglų k.'=>3,
		'Lietuvių k.'=>8,
        'Lankomumas'=>0],
	'4'=>[
		'Asmens kodas'=>'61003167777',
		'Vardas'=>'Ugnė',
		'Pavardė'=>'Dubinskaitė',
		'El. paštas'=>'m.bujauskaite@gmail.com',
		'Matematika'=>5,
		'Anglų k.'=>6,
		'Lietuvių k.'=>5,
        'Lankomumas'=>0],
	'5'=>[
		'Asmens kodas'=>'37410290129',
		'Vardas'=>'Giedrius',
		'Pavardė'=>'Strazdas',
		'El. paštas'=>'g.strazdas@yahoo.com',
		'Matematika'=>2,
		'Anglų k.'=>2,
		'Lietuvių k.'=>2,
        'Lankomumas'=>10]
			];
?>
<body>
<h3 style="text-align: center">Mokyklos mokinių sąrašas</h3>
<section>
<div>
    <?php $keys = array_keys($students['1']);?>
    <?php //var_dump($keys); echo $keys[0]?>
    <table class="table table-hover table-bordered table-sm" style="margin-left: auto; margin-right: auto; width: 80%; border: solid 2px #000000;">
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
</html>