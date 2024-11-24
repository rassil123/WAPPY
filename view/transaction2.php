<?php
require_once '../model/annonces.php';
$annonce = new annonce;


$annonce->giverrecoitgetter($_GET["lientoaccept"]);
$annonce->getterrecoitnulle($_GET["lientoaccept"]);
$annonce->giverdevientgetter($_GET["namenft"]);

$annonce->getterdevientnulle($_GET["namenft"]);
$annonce->liendevientlientoget($_GET["namenft"]);
$annonce->lientogetdevientnulle($_GET["namenft"]);

$annonce->lienrecoitlientoget($_GET["lientoaccept"]);
$annonce->lientogetrecoitnulle($_GET["lientoaccept"]);
redirect('../index.php');





