<?php
class Subject {
 // get subject data
 public function get_subjects($conn)
 {
  $sql = "SELECT * FROM subjects";
    $result = mysqli_query($conn, $sql);
    $subject_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $subject_table_data;
 }

 // insert subject data
 public function insert_data_subject($conn, $data) {
     $name = $data['subject_name'];
     $insert_subject_data = "INSERT INTO subjects (`subject_name`, created_at, `updated_at`) VALUES
     ('$name', Now(), Now());";
     $insert_subject_data_result = mysqli_query($conn, $insert_subject_data);
     return $insert_subject_data_result;
     
 }
 // update subject data
    public function update_data_subject($conn, $data) {
        $id = $data['id'];
        $name = $data['subject_name'];
        $update_subject_data = "UPDATE subjects SET subject_name = '$name', updated_at = Now() WHERE id = $id;";
        $update_subject_data_result = mysqli_query($conn, $update_subject_data);
        return $update_subject_data_result;
       
    }
}
?>