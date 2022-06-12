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
    ?>

    <h2 class="text-center" id="forma-naslov">Registrovani članovi</h2>

    <div class="pre-sor-div">
        <div id="div-pretrazi">
            <label>Pretraži:</label>
            <input type="text" class="form-control" id="txtPretraga">
            <button class="btn btn-primary mt-2" id="pretraziBtn">Pretraži</button>
        </div>

        <div id="div-sortiraj">
            <label>Sortiraj:</label>
            <select class="form-select" id="selKolona">
                <option>Izaberi</option>
                <option value="ime">Ime</option>
                <option value="prezime">Prezime</option>
                <option value="username">Username</option>
                <option value="naziv">Tip</option>

            </select>
            <select class="form-select mt-2" id="selSort">
                <option>Izaberi</option>
                <option value="asc">Rastuće</option>
                <option value="desc">Opadajuće</option>
            </select>
            <button class="btn btn-primary mt-2" id="sortBtn">Sortiraj</button>

        </div>

    </div>


    <table id="korisnici-tabela" class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Username</th>
                <th>Tip</th>
                <th>Trajanje</th>
                <th>Naknada</th>
                <th>Brisanje/Izmena</th>
            </tr>
        </thead>
        <tbody id="prikazBody">

            <?php

            $clan = new Clan(null, null, null, null, null, null);
            $sviClanovi = $clan->vratiSveClanove();

            for ($i = 0; $i < count($sviClanovi); $i++) :
            ?>

                <tr>
                    <td><?php echo $sviClanovi[$i]->ime  ?></td>
                    <td><?php echo $sviClanovi[$i]->prezime  ?></td>
                    <td><?php echo $sviClanovi[$i]->username  ?></td>
                    <td><?php echo $sviClanovi[$i]->naziv  ?></td>
                    <td><?php echo $sviClanovi[$i]->trajanje ?></td>
                    <td><?php echo $sviClanovi[$i]->naknada . " RSD" ?></td>
                    <td><a href="brisanjeClana.php?clanId=<?php echo $sviClanovi[$i]->clanId ?>"><button class="btn btn-primary" id="obrisi-button" value="<?php echo $sviClanovi[$i]->clanId; ?>">Obriši</button></a>
                        <a href="editPrikazClana.php?clanId=<?php echo $sviClanovi[$i]->clanId ?>"><button class="btn btn-dark" id="izmeni-button" value="<?php echo $sviClanovi[$i]->clanId; ?>">Izmeni</button></a>
                    </td>
                <tr>

                <?php
            endfor;
                ?>
        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="javascript.js"></script>
</body>

</html>