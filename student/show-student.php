<?php
$title = "Show Student";
include '../general/env.php';
include '../general/functions.php';
include '../layout/header.php';
include '../layout/nav.php';

if (isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];
    $delete = "DELETE FROM `student` WHERE id=$id";
    $query = mysqli_query($connect, $delete);
    if ($query) {
        path('student/show-student.php');
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Something wrong right now!
                </div>';
    }
}

$select = "SELECT * FROM `student`";
$check = mysqli_query($connect, $select);


?>

<h2 class="text-center my-5">Show All Students</h2>
<div>
    <table class="table text-center my-5">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action required</th>
        </tr>
        <?php
            if ($check) {
                while ($data = mysqli_fetch_assoc($check)) {
                    echo '<tr id="return">
                    <th scope="row">' . $data['id'] . '</th>
                    <td>' . $data['name'] . '</td>
                    <td>' . $data['email'] . '</td>
                    <td>' . $data['phone'] . '</td>
                    <td>
                    <button class="btn btn-info"><a href="/G4-Tasks/student/update-student.php?updateId=' . $data['id'] . '"
                    class="text-light">Edit</a></button>
                    <button class="btn btn-danger"><a href="/G4-Tasks/student/show-student.php?deleteId=' . $data['id'] . '"
                    class="text-light">Remove</a></button>
                    </td>
                    </tr>';
                }
            }
            ?>
    </table>
</div>

<?php
include '../layout/footer.php';
?>