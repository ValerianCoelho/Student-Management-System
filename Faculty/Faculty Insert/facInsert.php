<?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "Connection established";
    else
    {
        echo "Connection failed";
        exit();
    }
    
    $st_id = $_POST["faculty_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $pswd = $_POST["password"];

    $q1 = "insert into faculty (faculty_id, fname, lname, email, subject, password) values ('$st_id', '$fname', '$lname', '$email', '$subject', '$pswd')";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br><br>Values inserted successfully";
    else
        echo "<br><br>Insertion of values failed";
    $conn->close();
?>