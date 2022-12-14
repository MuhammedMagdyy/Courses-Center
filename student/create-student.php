<?php
$title = "Create Student";
include '../general/env.php';
include '../general/functions.php';
include '../layout/header.php';
include '../layout/nav.php';
include '../auth/nologin.php';


$course = "SELECT * from `course`";
$course_check = mysqli_query($connect, $course);

$gov = "SELECT * from `government`";
$gov_check = mysqli_query($connect, $gov);

if (isset($_POST['add'])) {
    $name = $_POST['studentName'];
    $email = $_POST['studentEmail'];
    $phone = $_POST['studentPhone'];
    $courseId = $_POST['courseId'];
    $govId = $_POST['goveId'];

    $insert = "INSERT INTO `student` values(null, '$name', '$email', '$phone', $courseId, $govId)";
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
            <div class="form-group">
                <label for="">Course</label>
                <select class="form-control" name="courseId" id="">
                    <option>Select Course</option>
                    <?php foreach ($course_check as $data) : ?>
                        <option value=" <?= $data['id'] ?> "> <?= $data['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label for="">Government</label>
            <select class="form-control" name="goveId" id="">
                <option>Select Government</option>
                <?php foreach ($gov_check as $data) : ?>
                    <option value=" <?= $data['id'] ?> "> <?= $data['name'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" name="add" class="btn btn-primary mt-1 my-4">Add</button>
        </fieldset>
    </form>
</div>

<?php
include '../layout/footer.php';
?>