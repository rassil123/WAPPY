<?php
require_once '../model/User.php';

$user = new User;

if($user->deleteuser($_GET["username"]))
{
    header("location:../view/basic-table.php");

}
