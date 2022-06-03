<?php 
include('../config/db_connect.php');
include('../class/Course.php');
$data = [
    'course_name' => $_POST['course_name'],
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),
];
$table = new Course();
$table->insert_data_course($conn, $data);

if ($table) {
    header("Location: ../course_index.php");
}else{
    echo "Failed to insert data";
}