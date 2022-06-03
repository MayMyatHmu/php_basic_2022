<?php 

include("../config/db_connect.php");
// subject delete
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM subjects WHERE id = {$id}";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../subject_index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}