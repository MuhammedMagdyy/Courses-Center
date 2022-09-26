<?php
$title = "Update Student";
include '../general/env.php';
include '../general/functions.php';
include '../layout/header.php';
include '../layout/nav.php';

if (isset($_GET['updateId'])) {
    $id = $_GET['updateId'];
    $select = "SELECT * FROM `student` WHERE id=$id";
    $check = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($check);
    $stuName = $row['name'];
    $stuEmail = $row['email'];
    $stuPhone = $row['phone'];
}

if (isset($_POST['update'])) {
    $name = $_POST['studentName'];
    $email = $_POST['studentEmail'];
    $phone = $_POST['studentPhone'];

    $update = "UPDATE `student` SET `id`=$id, `name`='$name', `email`='$email', `phone`='$phone' WHERE id=$id";
    $query = mysqli_query($connect, $update);
    if ($query) {
        path('student/show-student.php');
    } else {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
}

?>

<h2 class="text-center my-5">Update Student: <?= $stuName ?></h2>
<div class="container my-5">
    <form method="POST">
        <fieldset class="border p-4">
            <div class="form-group">
                <label for="studentName">Name</label>
                <input type="text" class="form-control" value="<?=$stuName?>" autocomplete="off" id="studentName" name="studentName" />
            </div>
            <div class="form-group">
                <label for="studentEmail">Email</label>
                <input type="email" class="form-control" value="<?=$stuEmail?>" autocomplete="off" id="studentEmail" name="studentEmail" />
            </div>
            <div class="form-group">
                <label for="studentPhone">Phone</label>
                <input type="text" class="form-control" value="<?=$stuPhone?>" autocomplete="off" id="studentPhone" name="studentPhone" />
            </div>
            <button type="submit" name="update" class="btn btn-primary mt-1">Update</button>
        </fieldset>
    </form>
</div>

<?php
include '../layout/footer.php';
?>