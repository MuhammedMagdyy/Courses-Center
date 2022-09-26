<?php 
$title = "Add Government";
include "../general/env.php";
include "../layout/header.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $create =  "INSERT INTO `government` Values (null,'$name')";
    $query = mysqli_query($connect,$create);
    if($query){
        $_SESSION['createsuc']="<div class = 'alert alert-success'> Updated Successfully</div>";
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
                    <input type="text" placeholder="Name" class="form-control" name="name">

                </div>
                <?= $error ?? "" ?>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary form-control" name="submit">ADD</button>


                </div>

            </form>
        </div>
    </div>
</div>
<?php include "../layout/footer.php";
?>