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
    include 'Tip.php';
    include 'Clan.php';

    $clan = new Clan(null, null, null, null, null, null);
    $clan = $clan->vratiClana($_GET['clanId']);


    ?>

    <form method="post" id="dodajClanaForma" class="text-center">

        <div class="form-group mt-3">
            <label class="form-label">Ime </label>
            <input type="text" class="form-control" name="ime" value="<?php echo $clan->ime ?>">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Prezime </label>
            <input type="text" class="form-control" name="prezime" value="<?php echo $clan->prezime ?>">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Username </label>
            <input type="text" class="form-control" name="username" value="<?php echo $clan->username ?>">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Password </label>
            <input type="password" class="form-control" name="password" value="<?php echo $clan->password ?>">
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Email </label>
            <input type="email" class="form-control" name="email" value="<?php echo $clan->email ?>">
        </div>

        <div class="form-group mt-3 mb-3">
            <label class="form-label">Tip </label>
            <select class="form-select text-center" name="tip">
                <?php
                $tip = new Tip();
                $sviTipovi = $tip->vratiSveTipove();

                for ($i = 0; $i < count($sviTipovi); $i++) :
                ?>
                    <option value="<?php echo $sviTipovi[$i]->id ?>"><?php echo $sviTipovi[$i]->naziv ?></option>
                <?php
                endfor;
                ?>
            </select>
        </div>

        <button type="submit" id="izmeniClanaBtn" name="izmeniClanaBtn" class="btn btn-primary">Sačuvaj izmene</button>
    </form>

</body>

</html>