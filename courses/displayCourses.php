<?php 
include '../general/env.php';
include '../general/functions.php';
$title = "List of Courses";
include '../layout/header.php';
include '../layout/nav.php';
include '../auth/nologin.php';


?>
    <div class = "container my-5">
    <table class="table table-striped table-dark">
  <thead>
    <tr style="text-align: center;">
      <th scope="col" >id</th>
      <th scope="col">name</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $print = "SELECT * FROM `course`";
    $result = mysqli_query($connect, $print);
    if($result) {
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        echo '<tr style="text-align: center;">
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>
        <button class="btn btn-primary" ><a href="updateCourse.php?updateid='.$id.'" class = "text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deleteCourse.php?deleteid='.$id.'" class = "text-light">Delete</a></button>        </td>
      </tr>'; 
    }
   }
    ?>
    
  </tbody>
    </table>
    </div>
    <?php
include '../layout/footer.php';
?>