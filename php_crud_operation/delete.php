<?php

include "connection.php";

$delete=$db->exec("delete from game where id_game=".$_GET['id_game']);

if($delete)
{
    header("Location:index.php");
}