<?php 
include('../config/db_connect.php');
include('../class/Subject.php');
$data = [
    'subject_name' => $_POST['subject_name'],
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s'),
];
$table = new Subject();
$table->insert_data_subject($conn, $data);

if ($table) {
    header("Location: ../subject_index.php");
}else{
    echo "Failed to insert data";
}