<?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "Connection successful";
    else {
        echo "Connection failed";
        exit();
    }

    $st_id = $_POST["student_id"];
    $date = $_POST["date"];
    $present = $_POST["present"];

    $q1 = "insert into attendance (student_id, date, present) values ('$st_id', '$date', '$present')";
    $r1 = mysqli_query($conn, $q1);

    if($r1)
        echo "<br>Values inserted successfully";
    else
        echo "<br>Insertion failed";
?>