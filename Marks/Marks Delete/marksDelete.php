<?php
    $st_id = $_POST["student_id"];
    $sub = $_POST["subject"];

    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "<br>Connection established";
    else {
        echo "<br>Connection failed";
        exit();
    }

    $q1 = "delete from marks where student_id = '$st_id' and subject = '$sub'";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br>Marks of ".$st_id." were deleted";
    else
        echo "<br>Deletion failed";
?>