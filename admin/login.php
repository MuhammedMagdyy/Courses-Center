<?php
$title = "Login";
include "../general/env.php";
include "../layout/header.php";
include "../layout/nav.php";
include "../auth/loginadmin.php";
// print_r($_SESSION);
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `admin` Where `email` = '$email' AND `password` = '$password'";
    $query = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($query);
    if ($query) {
        $_SESSION['admin'] = $row;
        header("location:../index.php");
    } else {
        header("location:./login.php");
    }
}
?>
<div class="container my-5">
    <div class="row">
        <div class="offset-3 col-6 mt-5 text-center h1 text-primary">
            Login
        </div>
        <div class="offset-4 col-4 mt-5">
            <form method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" class="form-control" name="password" required>

                </div>
                <?= $error ?? "" ?>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary form-control" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "../layout/footer.php";

?>