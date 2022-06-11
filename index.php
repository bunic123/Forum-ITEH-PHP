<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registracija | Forum | ITEH</title>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <h2 class="text-center" id="forma-naslov">Forma za registraciju</h2>

    <form method="post" id="dodajClanaForma" class="text-center">

        <div class="form-group mt-3">
            <label class="form-label">Ime </label>
            <input type="text" class="form-control" name="ime">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Prezime </label>
            <input type="text" class="form-control" name="prezime">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Username </label>
            <input type="text" class="form-control" name="username">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Password </label>
            <input type="text" class="form-control" name="password">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Email </label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group mt-3 mb-3">
            <label class="form-label">Tip </label>
            <select class="form-select" name="tip">

            </select>
        </div>

        <button type="submit" id="dodajClanaBtn" name="dodajClanaBtn" class="btn btn-primary">Sačuvaj</button>
    </form>



</body>

</html>