<?php
include "config/database.php";
include "inc/header.php";



?>

<a href="create.php" class="btn btn-primary my-4">CREATE NEW USER</a>
<table class="w-100 text-center p-3" border="1px">
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>country</th>
        <th>title</th>
        <th>filter</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($userFetch as $key => $value): ?>
    <tr>
        <td scope="row"><?= $value['id'] ?></td>
        <td><?= $value['name'] ?> </td>
        <td><?= $value['age'] ?> </td>
        <td><?= $value['country'] ?></td>
        <td><?= $value['title'] ?></td>
        <td>
            <form action="service/delete.php" method="post">
                <input type="hidden" value="<?= $value['id'] ?>" name="idUser" />
                <button type="submit" class="btn btn-danger">DELETE</button>
            </form> <form action="service/update.php" method="post">
                <input type="hidden" value="<?= $value['id'] ?>" name="idUser"/>
                <button type="submit" class="btn btn-secondary">UPDATE</button>
            </form>

        </td>
    </tr>
        <?php endforeach; ?>
    </tbody>
</table>
