<?php
$title = "Create Student";
include '../general/env.php';
include '../general/functions.php';
include '../layout/header.php';
include '../layout/nav.php';

if (isset($_POST['add'])) {
    $name = $_POST['studentName'];
    $email = $_POST['studentEmail'];
    $phone = $_POST['studentPhone'];

    $insert = "INSERT INTO `student` values(null, '$name', '$email', '$phone')";
    $query = mysqli_query($connect, $insert);
    if ($query) {
        path('student/create-student.php');
    } else {
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
}

?>

<h2 class="text-center my-5">Students</h2>
<div class="container my-5">
    <form method="POST">
        <fieldset class="border p-4">
            <div class="form-group">
                <label for="studentName">Name</label>
                <input type="text" class="form-control" autocomplete="off" id="studentName" name="studentName" required autofocus />
            </div>
            <div class="form-group">
                <label for="studentEmail">Email</label>
                <input type="email" class="form-control" autocomplete="off" id="studentEmail" name="studentEmail" required autofocus />
            </div>
            <div class="form-group">
                <label for="studentPhone">Phone</label>
                <input type="text" class="form-control" autocomplete="off" id="studentPhone" name="studentPhone" required autofocus />
            </div>
            <button type="submit" name="add" class="btn btn-primary mt-1">Add</button>
        </fieldset>
    </form>
</div>

<?php
include '../layout/footer.php';
?>