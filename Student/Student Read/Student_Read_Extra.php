<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        echo $conn->connect_error;
    }

    $student_id = $_GET['student_id'];
    $query = "
    SELECT 
    student.student_id,
    student.fname AS student_fname,
    student.lname AS student_lname,
    AVG(marks.IT1) AS avg_IT1,
    AVG(marks.IT2) AS avg_IT2,
    AVG(marks.IT3) AS avg_IT3,
    AVG(marks.SEM) AS avg_SEM,
    AVG(attendance.present)*100 AS avg_attendance
FROM student
LEFT JOIN marks ON student.student_id = marks.student_id
LEFT JOIN attendance ON student.student_id = attendance.student_id
WHERE student.student_id = '$student_id'
GROUP BY student.student_id, student.fname, student.lname;

    ";
    $result = $conn->query($query);

    if($result->num_rows == 0) {
        $query = "
        SELECT 
        student.student_id,
        student.fname AS student_fname,
        student.lname AS student_lname,
        AVG(marks.IT1) AS avg_IT1,
        AVG(marks.IT2) AS avg_IT2,
        AVG(marks.IT3) AS avg_IT3,
        AVG(marks.SEM) AS avg_SEM,
        AVG(attendance.present)*100 AS avg_attendance
    FROM student
    LEFT JOIN marks ON student.student_id = marks.student_id
    LEFT JOIN attendance ON student.student_id = attendance.student_id
    GROUP BY student.student_id, student.fname, student.lname;
        ";
        $result = $conn->query($query);
    }

    $data = [];

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);

    $conn->close();
?>