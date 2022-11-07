<?php
    if(isset($conn)){
        $queryAllInfo = "select * from userList";

        $user = mysqli_query($conn,$queryAllInfo);
        $userFetch = mysqli_fetch_all($user,MYSQLI_ASSOC);

        if(isset($_GET['submit'])){
        $name1 = $_GET['name'];
    $queryAllInfo = "select * from userlist where name like '%$name1%'";
    $user = mysqli_query($conn,$queryAllInfo);
    $userFetch = mysqli_fetch_all($user,MYSQLI_ASSOC);

    }
}
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown</a>

            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" name="name" placeholder="Search name ..." >
            <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
        </form>
    </div>
</nav>