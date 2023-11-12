<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        echo $conn->connect_error;
    }

    $faculty_id = $_GET['faculty_id'];
    $query = "select * from faculty where faculty_id='$faculty_id';";
    $query = "select * from faculty where faculty_id in (select faculty_id from faculty where faculty_id='$faculty_id');";
    $result = $conn->query($query);

    if($result->num_rows == 0) {
        $query = "select * from faculty;";
        $result = $conn->query($query);
    }

    $data = [];

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);

    $conn->close();
?>