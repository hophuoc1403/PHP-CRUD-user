<?php
include "../config/database.php";
//session_start();
$id =  $_POST['idUser'];
$queryDeleteUser = "delete from userlist where id = $id";
$result = mysqli_query($_SESSION['connect'],$queryDeleteUser);
header('Location: /crudUserInfo/index.php');

