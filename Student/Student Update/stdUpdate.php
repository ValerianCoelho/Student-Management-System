<?php
    $st_id = $_POST["student_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "Connection established";
    else
    {
        echo "Connection failed";
        exit();
    }

    $q1 = "update student set lname = '$lname', email = '$email', password = '$password', fname = '$fname' where student_id = '$st_id'";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br><br>Values updated successfully";
    else
        echo "<br><br>Updation of values failed";
?>