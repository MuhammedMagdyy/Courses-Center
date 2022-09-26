<?php

$title = "List Government";
include "../general/env.php";
include "../general/functions.php";
include "../layout/header.php";
include '../layout/nav.php';
// include_once("../layout/navbar.php");



$select = "SELECT * FROM `government`";
$query = mysqli_query($connect, $select);
if ($query) {
    $row = mysqli_fetch_all($query, 1);
    // print_r($row);
}



?>

<h1 class="text-center text-primary"><?= $title ?> </h1>
</div>
<div class="container">
    <div class="row">
        <div class="offset-3 col-6 mt-5">

            <table class="table text-center">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Action</th>


                </tr>
                <?php
                foreach ($row as $Data) {
                ?>
                    <tr>
                        <td><?= $Data['id'] ?></td>
                        <td><?= $Data['name'] ?></td>
                        <td>
                            <form action="updateGov.php">
                                <button class="btn btn-info" type="submit" name="edit" value="<?= $Data['id'] ?>">Edit</button>
                                <button class="btn btn-danger" type="submit" name="delete" value="<?= $Data['id'] ?>">Delete</button>
                            </form>
                        </td>


                    </tr>

                <?php
                }

                ?>
            </table>

        </div>

    </div>
</div>


<?php


include_once("../layout/footer.php");
?>