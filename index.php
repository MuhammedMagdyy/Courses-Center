<?php
$title = "Home";
include './general/env.php';
include './general/functions.php';
include './layout/header.php';
include './layout/nav.php';
include 'auth/nologin.php';


$select = "SELECT * From `studentdata`";
$query = mysqli_query($connect, $select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h2 class="text-center my-5">Show Data</h2>
    <div>
        <table class="table text-center my-5">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Course</th>
                <th scope="col">Government</th>
                <th scope="col">Action required</th>
            </tr>
            <?php
            if ($query) {
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '<tr id="return">
                    <th scope="row">' . $data['stuId'] . '</th>
                    <td>' . $data['stuName'] . '</td>
                    <td>' . $data['email'] . '</td>
                    <td>' . $data['phone'] . '</td>
                    <td>' . $data['courseName'] . '</td>
                    <td>' . $data['govName'] . '</td>
                    <td>
                    <button class="btn btn-info"><a href="/G4-Tasks/student/update-student.php?updateId=' . $data['stuId'] . '"
                    class="text-light">Edit</a></button>
                    <button class="btn btn-danger"><a href="/G4-Tasks/student/show-student.php?deleteId=' . $data['stuId'] . '"
                    class="text-light">Remove</a></button>
                    </td>
                    </tr>';
                }
            }
            ?>
        </table>
    </div>
</body>

</html>

<?php
include './layout/footer.php';
?>