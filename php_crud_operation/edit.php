'<?php

include "connection.php";
// var_dump($_GET);
$daftar=$db->query("select * from game where id_game=".$_POST['id_game']);

$data_daftar=$daftar->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid_gameth=device-wid_gameth, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Form Edit daftar</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="update.php" method="POST">

                <input type="hid_gameden" name="id_game"  value="<?php echo $data_daftar[0]['id_game']; ?>">

            <div class="form-group">
                <label for="exampleInputEmail1">game</label>
                <input type="extt" name="game" value="<?php echo $data_daftar[0]['game']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Developer</label>
                <input type="text" name="developer" value="<?php echo $data_daftar[0]['developer']; ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>'