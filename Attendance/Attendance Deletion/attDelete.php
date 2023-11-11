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

    $q1 = "delete from attendance where student_id = '$st_id' and date = '$date'";
    $r1 = mysqli_query($conn, $q1);

    if($r1)
        echo "<br>Values deleted successfully";
    else
        echo "<br>Deletion failed";
?>