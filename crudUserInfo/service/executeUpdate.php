<?php
include "../config/database.php";

if(isset($_POST['submit']))
{
    if(isset($conn)){
        $id = $_POST['id'];
        $queryGetUser = "select * from userlist where id=$id";
        $user = mysqli_query($conn,$queryGetUser);
        $userFetch = mysqli_fetch_all($user,MYSQLI_ASSOC);
        $name =  $_POST['name'] ?  $_POST['name'] : $userFetch[0]['name'];
        $age = $_POST['name'] ? $_POST['name'] : $userFetch[0]['age'];
        $country = $_POST['country'] ? $_POST['country'] : $userFetch[0]['country'];
        $title = $_POST['title'] ? $_POST['title'] : $userFetch[0]['title'];
        $queryUpdate = "update userlist set name='$name',age=$age,country='$country',title='$title' WHERE id=$id";
        $result=mysqli_query($conn,$queryUpdate);
        header('Location: /crudUserInfo/index.php');
    }
}