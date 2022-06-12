<?php

$hostName = "localhost";
$username = "root";
$password = "";
$dbname = "forum";
$connection = new mysqli($hostName, $username, $password, $dbname);

$pretrazi = $_POST['Pretrazi'];


$sqlQuery = "SELECT c.id as clanId, c.ime, c.prezime, c.username, c.email, t.naziv, t.naknada, t.trajanje
         FROM clan c JOIN tip t ON c.tip_id=t.id where c.ime LIKE '%$pretrazi%' OR c.prezime LIKE '%$pretrazi%'
          OR c.username LIKE '%$pretrazi%' OR c.email LIKE '%$pretrazi%' OR t.naziv LIKE '%$pretrazi%'";

$result = $connection->query($sqlQuery);
$clanovi = [];
while ($i = $result->fetch_object()) {
    $clanovi[] = $i;
}

for ($i = 0; $i < count($clanovi); $i++) :
?>

    <tr>
        <td><?php echo $clanovi[$i]->ime  ?></td>
        <td><?php echo $clanovi[$i]->prezime  ?></td>
        <td><?php echo $clanovi[$i]->username  ?></td>
        <td><?php echo $clanovi[$i]->naziv  ?></td>
        <td><?php echo $clanovi[$i]->trajanje ?></td>
        <td><?php echo $clanovi[$i]->naknada . " RSD" ?></td>
        <td><a href="brisanjeClana.php?clanId=<?php echo $clanovi[$i]->clanId ?>"><button class="btn btn-primary" id="obrisi-button" value="<?php echo $sviClanovi[$i]->clanId; ?>">Obriši</button></a>
            <a href="editPrikazClana.php?clanId=<?php echo $clanovi[$i]->clanId ?>"><button class="btn btn-dark" id="izmeni-button" value="<?php echo $sviClanovi[$i]->clanId; ?>">Izmeni</button></a>
        </td>
    <tr>

    <?php
endfor;
    ?>