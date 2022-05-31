<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mokykla - mokinių pažymių vidurkiai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet"
</head>
<body>

<form method="post" style=" margin-left: auto; margin-right: auto; width: 80%;">
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
        <input type="text" class="form-control" name="courseNr" placeholder="--KURSAS--" required>
    </div>
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="schoolName" placeholder="--MOKYKLOS PAVADINIMAS--" required>
    </div>
    <div class="form-group mb-3">
    <button class="btn btn-primary" name="save">SPAUSDINTI</button>
    </div>
</form>
</body>
</html>