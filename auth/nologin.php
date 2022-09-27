<?php
if(empty($_SESSION['admin'])){
    header("location:/G4-Tasks/admin/login.php");
}
?>