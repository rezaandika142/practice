<?php

include "connection.php";

$input=$db->exec("insert into game(game,developer) values('".$_POST['game']."','".$_POST['developer']."')");

if($input)
{
    header("Location:index.php");
}