<?php 

include('config/db_connect.php');
include("layouts/head.php");

include("class/Subject.php");

// chpater deatils
$id = $_GET['id'];
$select_subject_data = "SELECT * FROM subjects WHERE id = '$id'";
$select_subject_data_result = mysqli_query($conn, $select_subject_data);
$subject_update = mysqli_fetch_assoc($select_subject_data_result);
// Chapter update
if (isset($_POST['subject_update_data'])) {

    $data = [
        'id' => $_GET['id'],
        'subject_name' => $_POST['subject_name']
    ];
   $table = new Subject();
   $subjects = $table->update_data_subject($conn, $data);
    if ($subjects) {
        header("Location: subject_index.php");
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
    <h1>Subject Update</h1>

    <div class="card">
     <div class="card-header">
      <h3>Subject list <span><a href="subject_index.php" class="btn btn-primary btn-lg">Back</a></span></h3>
     </div>
     <div class="card-body">
      <form action="#" method="POST">
       <div class="form-group">
        <label for="">Subject Name</label>
        <input type="text" name="subject_name" class="form-control" value="<?= $subject_update['subject_name']  ?>">
       </div>
       <div class="form-group mt-5">
        <input type="submit" name="subject_update_data" class="btn btn-primary" value="Update">
       </div>
      </form>
     </div>
</div>
   </div>
</div>
 <?php include("layouts/footer.php") ?>