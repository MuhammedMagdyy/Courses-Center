<?php
include '../general/env.php';
include '../general/functions.php';
$title = "add course";
include '../layout/header.php';
include '../layout/nav.php';
if(isset($_POST['click'])) {
    $courseName = $_POST['name'];
    $query = "INSERT INTO `course` VALUES('null', '$courseName')";
    $result = mysqli_query($connect, $query);
}

?>

    <div class = "container my-3">
        <div class = "row justify-content-center">
            <div class = "card mt-5">
                <div class = "card-header">
                    <h4>Insert Course</h4>
                </div>
                <div class = "card-body">
                    <form action = "" method = "POST">
                        <div class="form-group">
                            <label for = "">Course Name</label>
                            <input type = "text" name = "name" class = "form-control" required>
                        </div>
                        <div class="form-group">
                            <button type = "submit" name = "click" class = "btn btn-primary">insert</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
include '../layout/footer.php';
?>