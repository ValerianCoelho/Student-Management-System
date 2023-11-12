<?php
    $fac_id = $_POST["faculty_id"];

    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "<br>Connection established";
    else {
        echo "<br>Connection failed";
        exit();
    }

    $q1 = "delete from faculty where faculty_id = '$fac_id'";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br>Details of ".$fac_id." were deleted";
    else
        echo "<br>Deletion failed";
    $conn->close();
?>