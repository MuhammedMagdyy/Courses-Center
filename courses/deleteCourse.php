<?php 
include '../general/env.php';
include '../general/functions.php';
$title = "delete Course";
include '../layout/header.php';
include '../layout/nav.php';
include '../auth/nologin.php';


if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete = "DELETE FROM `course` WHERE id = $id";
    $result = mysqli_query($connect, $delete);
    if($result) {
        path('courses/displayCourses.php');
    }
}

?>
<?php
include '../layout/footer.php';
?>