<?php
$title = "update Course";
include '../general/env.php';
include '../general/functions.php';
include '../layout/header.php';
include '../layout/nav.php';
include '../auth/nologin.php';

if (isset($_POST['submit'])) {
    $id = $_GET['updateid'];
    $name = $_POST['name'];
    $update = "UPDATE `course` SET `name`='$name' WHERE id = $id";
    $query = mysqli_query($connect, $update);
    if ($query) {
        path('courses/displayCourses.php');
    }
}
?>

<div class="container my-5">
    <form method="POST">
        <div class="form-group" name="name">
            <label for="name"> New Course Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
<?php
include '../layout/footer.php';
?>