<?php 
$title = "Update Government";
include "../general/env.php";
include "../layout/header.php";
include '../auth/nologin.php';


$id = "";

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $select =  "SELECT * FROM `government` WHERE id = $id";
    $query = mysqli_query($connect,$select);
    if($query){
        $row = mysqli_fetch_assoc($query);
    }else{
        $error ="<div class = 'alert alert-danger'> Some Thing Wrong</div>";
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $update =  "UPDATE `government` SET `name` = '$name' WHERE id =$id";
    // echo $update;
    $query = mysqli_query($connect,$update);
    if($query){
        header("location:ShowGov.php");

    }else{
        $error ="<div class = 'alert alert-danger'> Some Thing Wrong</div>";
    }
}
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete =  "DELETE From `government` WHERE id =$id";
    // echo $update;
    $query = mysqli_query($connect,$delete);
    if($query){
     header("location:ShowGov.php");

    }else{
        $error ="<div class = 'alert alert-danger'> Some Thing Wrong</div>";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="offset-3 col-6 mt-5 text-center h1 text-primary">
            <?= $title?>
        </div>
        <div class="offset-4 col-4 mt-5">
            <form method="post">
                <div class="mb-3">
                    <input type="text" placeholder="Name" class="form-control" name="name" value="<?=$row['name']?>">

                </div>
                <?= $error ?? "" ?>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary form-control" name="submit">Update</button>


                </div>

            </form>
        </div>
    </div>
</div>
<?php include "../layout/footer.php";
?>