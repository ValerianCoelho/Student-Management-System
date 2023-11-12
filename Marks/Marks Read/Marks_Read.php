<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        echo $conn->connect_error;
    }

    $student_id = $_GET['student_id'];
    $query = "select * from marks where student_id='$student_id';";
    $result = $conn->query($query);

    if($result->num_rows == 0) {
        $query = "select * from marks where student_id = '21co01';";
        $result = $conn->query($query);
    }

    $data = [];

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);

    $conn->close();
?>