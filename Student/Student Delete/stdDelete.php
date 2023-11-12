<?php
    $st_id = $_POST["student_id"];

    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "<br>Connection established";
    else {
        echo "<br>Connection failed";
        exit();
    }

    $q1 = "delete from student where student_id = '$st_id'";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br>Details of ".$st_id." were deleted";
    else
        echo "<br>Deletion failed";
?>