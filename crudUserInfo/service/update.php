<?php
include "../inc/header.php";

if($_POST['idUser']){
    $id = $_POST['idUser'];
}

$queryGetUser = "select * from userlist where id=$id";
if (isset($conn)) {
    $user = mysqli_query($conn,$queryGetUser);
    $userFetch = mysqli_fetch_all($user,MYSQLI_ASSOC);
}


?>

<form method="post" action="./executeUpdate.php" class="d-flex flex-column mt-5">
    <label  for=""> name : <?= $userFetch[0]['name'] ?>
        <input class=" form-control mr-sm-2 w-10" type="text" name="name">
    </label>

    <label  for="">age : <?= $userFetch[0]['age'] ?>
        <input class=" form-control mr-sm-2 w-10" type="number" name="age">
    </label>

    <label for="">country : <?= $userFetch[0]['country'] ?>
        <input  class=" form-control mr-sm-2 w-10" type="text" name="country">
    </label><label for="">title : <?= $userFetch[0]['title'] ?>
        <input class=" form-control mr-sm-2 w-10" type="text" name="title">
    </label>
    <input type="submit" name="submit" value="Update">
    <input type="hidden" value="<?= $userFetch[0]['id'] ?>" name="id">
</form>
    <small>Note : if you set input empty you will remain data in that field =))</small>


