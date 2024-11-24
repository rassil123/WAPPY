<?php
require_once '../model/annonces.php';
$annonce = new annonce;

if($annonce->transactionaccepte($_GET["namenft"]))
{
    if ($annonce->mettreanullegetter($_GET["namenft"])) {

        if ($annonce->transactionaccepteprlien($_GET["lientoaccept"])) {

            if ($annonce->mettreanullegetterparlien($_GET["lientoaccept"])) {
                header("location:../view/affichage_des_annonces.php");
            }
        }
    }

}
