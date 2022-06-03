<?php 

// insert into users table
include("db_connect.php");
$insert_user_data = "INSERT INTO users (`username`, password, email, created_at, `updated_at`) VALUES
('admin', 'admin', 'admin@gmail.com', Now(), Now()),

('user', 'user', 'user@gmail', Now(), Now()),

('test', 'test', 'test@gmail', Now(), Now()),
('Ashinindavudha', '123456', 'ashin@gmail.com', Now(), Now()),
('Avaxam', '123456', 'avamax@gmail.com', Now(), Now()),
('Bhavana', '123456', 'bhavana@gmail.com', Now(), Now())
;";
$insert_user_data_result = mysqli_query($conn, $insert_user_data);
if ($insert_user_data_result) {
    echo "Data inserted successfully";
}else{
    echo "Failed to insert data";
}