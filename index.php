<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "21co68";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        echo $conn->connect_error;
    }

    $query = $_GET['query'];
    $result = $conn->query($query);

    $data = [];

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Allow requests from any origin (replace "*" with specific origins as needed)
    header("Access-Control-Allow-Origin: *");
    
    echo json_encode($data);

    $conn->close();
?>