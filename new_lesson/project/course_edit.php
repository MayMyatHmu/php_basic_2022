<?php 

include('config/db_connect.php');
include("layouts/head.php");

include("class/Course.php");

// chpater deatils
$id = $_GET['id'];
$select_course_data = "SELECT * FROM courses WHERE id = '$id'";
$select_course_data_result = mysqli_query($conn, $select_course_data);
$course_update = mysqli_fetch_assoc($select_course_data_result);
// Chapter update
if (isset($_POST['course_update_data'])) {

    $data = [
        'id' => $_GET['id'],
        'course_name' => $_POST['course_name']
    ];
   $table = new Course();
   $courses = $table->update_data_course($conn, $data);
    if ($courses) {
        header("Location: course_index.php");
    }else{

        echo "Failed to insert data";
    } 
}
?>
<body>
 <?php include("layouts/navbar.php") ?>
 <?php include("layouts/header.php") ?>

<div class="container">
  <div class="row">
   <div class="col-lg-10">
    <h1>Course Update</h1>

    <div class="card">
     <div class="card-header">
      <h3>Course list <span><a href="course_index.php" class="btn btn-primary btn-lg">Back</a></span></h3>
     </div>
     <div class="card-body">
      <form action="#" method="POST">
       <div class="form-group">
        <label for="">Course Name</label>
        <input type="text" name="course_name" class="form-control" value="<?= $course_update['course_name']  ?>">
       </div>
       <div class="form-group mt-5">
        <input type="submit" name="course_update_data" class="btn btn-primary" value="Update">
       </div>
      </form>
     </div>
</div>
   </div>
</div>
 <?php include("layouts/footer.php") ?>