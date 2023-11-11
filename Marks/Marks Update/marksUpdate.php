<?php
    $st_id = $_POST["student_id"];
    $subject = $_POST["subject"];
    $IT1 = $_POST["IT1"];
    $IT2 = $_POST["IT2"];
    $IT3 = $_POST["IT3"];
    $SEM = $_POST["SEM"];

    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "Connection established";
    else
    {
        echo "Connection failed";
        exit();
    }

    $q1 = "update marks set IT1 = $IT1, IT2 = $IT2, IT3 = $IT3, SEM = $SEM where student_id = '$st_id' and subject = '$subject'";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br><br>Values updated successfully";
    else
        echo "<br><br>Updation of values failed";
?>