<?php

include "connection.php";



$input=$db->exec("update game set game='".$_POST['game']."',developer='".$_POST['developer']."'where id_game=".$_POST['id_game']);

if($input)
{
    header("Location:index.php");
}
// $update=$db->exec("update siswa set nama='".$_POST['nama']."',pekerjaan='".$_POST['pekerjaan']."'where id_siswa=".$_POST['id_siswa']);