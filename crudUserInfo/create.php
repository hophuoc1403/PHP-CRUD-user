<?php include "inc/header.php";

include "./config/database.php";
$nameErr = $ageErr = $countryErr = $titleErr = '';
$name  = $country = $title = '';
$age = 0;

if(isset($_POST['submit'])){
    if($_POST['name'] == ""){
        $nameErr = "name is required";
    }else{
        $name = filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

        if($_POST['age'] == ""){
        $ageErr = "age is required";
    }else {
            $age = intval($_POST['age'] );
        }

        if($_POST['country'] == ""){
        $countryErr = "country is required";
    }else {
            $country = $_POST['country'];
        }

        if($_POST['title'] == ""){
        $titleErr = "title is required";
    }else {
        $title = filter_input(
            INPUT_POST,
            'title',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }
    if(empty($nameErr) && empty($ageErr) && empty($countryErr) && empty($titleErr)){
        echo $name . $title . $country . $age;
//        $query = "insert into userlist(id, name, country, title, age) values (null,$name,$country,$title,$age)";
        $query = "insert into userlist(id, name, country, title, age) values (null,'$name','$country','$title',$age)";
        $result = mysqli_query($_SESSION['connect'],$query);
//        var_dump($result);
        header('Location: ./');
    }
}

?>



<h1>Create New user here</h1>
<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="d-flex flex-column mt-5">
    <label  for="">name :
    <input class=" form-control mr-sm-2 w-10" type="text" name="name">
        <span style="color: red"><?= $nameErr ?></span>
    </label><label  for="">age :
    <input class=" form-control mr-sm-2 w-10" type="number" name="age">
        <span style="color: red"><?= $ageErr ?></span>
    </label>
    <label for="">country :
    <input  class=" form-control mr-sm-2 w-10" type="text" name="country">
        <span style="color: red"><?= $countryErr ?></span>
    </label><label for="">title :
    <input class=" form-control mr-sm-2 w-10" type="text" name="title">
        <span style="color: red"><?= $titleErr ?></span>

    </label>
        <input type="submit" name="submit" value="Create">
</form>

