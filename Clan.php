<?php

class Clan
{
    public $id;
    public $ime;
    public $prezime;
    public $username;
    public $password;
    public $email;
    public $tip_id;

    function __construct($ime, $prezime, $username, $password, $email, $tip_id)
    {
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->tip_id = $tip_id;
    }


    public function vratiSveClanove()
    {
        $hostName = "localhost";
        $username = "root";
        $password = "";
        $dbname = "forum";
        $connection = new mysqli($hostName, $username, $password, $dbname);

        $sqlQuery = "SELECT c.id as clanId, c.ime, c.prezime, c.username, c.email, t.naziv, t.naknada, t.trajanje
         FROM clan c JOIN tip t ON c.tip_id=t.id";
        $result = $connection->query($sqlQuery);
        $clanovi = [];
        while ($i = $result->fetch_object()) {
            $clanovi[] = $i;
        }

        return $clanovi;
    }


    public function sacuvajNovogClana($clan)
    {
        $hostName = "localhost";
        $username = "root";
        $password = "";
        $dbname = "forum";
        $connection = new mysqli($hostName, $username, $password, $dbname);

        $sqlQuery = "insert into clan (ime, prezime, username, password, email, tip_id) 
        values ('$clan->ime', '$clan->prezime', '$clan->username', '$clan->password', '$clan->email', '$clan->tip_id')";

        $connection->query($sqlQuery);

        echo "<script type='text/javascript'>
        alert('Novi korisnik je uspešno registrovan!');
        location='prikazClanova.php';</script>";
    }
}
