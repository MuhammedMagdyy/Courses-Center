<?php
if(empty($_SESSION['admin'])){
    header("location:/Courses-Center/admin/login.php");
}
?>