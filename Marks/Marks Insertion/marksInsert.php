<?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    if($conn)
        echo "Connection established";
    else
    {
        echo "Connection failed";
        exit();
    }
    
    $st_id = $_POST["student_id"];
    $subject = $_POST["subject"];
    $IT1 = $_POST["IT1"];
    $IT2 = $_POST["IT2"];
    $IT3 = $_POST["IT3"];
    $SEM = $_POST["SEM"];

    echo "<br>Student id : ".$st_id;
    echo "<br>Subject : ".$subject;
    echo "<br>IT 1 : ".$IT1;
    echo "<br>IT 2 : ".$IT2;
    echo "<br>IT 3 : ".$IT3;
    echo "<br>SEM : ".$SEM;

    $q1 = "insert into marks (student_id, subject, IT1, IT2, IT3, SEM) values ('$st_id', '$subject', $IT1, $IT2, $IT3, $SEM)";
    $r1 = mysqli_query($conn, $q1);
    if($r1)
        echo "<br><br>Values inserted successfully";
    else
        echo "<br><br>Insertion of values failed";
?>