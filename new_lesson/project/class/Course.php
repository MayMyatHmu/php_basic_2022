<?php 
class Course {
 // get chapter data
 public function get_course($conn)
 {
  $sql = "SELECT * FROM courses";
    $result = mysqli_query($conn, $sql);
    $chapter_table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $chapter_table_data;
 }

 // insert chapter data 
 public function insert_data_course($conn, $data) {
     $name = $data['course_name'];
     $insert_chapter_data = "INSERT INTO courses (`course_name`, created_at, `updated_at`) VALUES
     ('$name', Now(), Now());";
     $insert_chapter_data_result = mysqli_query($conn, $insert_chapter_data);
     return $insert_chapter_data_result;
    
 }

 // update course data
    public function update_data_course($conn, $data) {
        $id = $data['id'];
        $name = $data['course_name'];
        $update_chapter_data = "UPDATE courses SET course_name = '$name', updated_at = Now() WHERE id = $id;";
        $update_chapter_data_result = mysqli_query($conn, $update_chapter_data);
        return $update_chapter_data_result;
        
    }
}