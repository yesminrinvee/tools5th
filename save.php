<?php
session_start();
//echo '<pre>';
//print_r($_GET);

//var_dump();
getData();//Function is being called

function getData()
{
    $studentName = $_POST['studentName'];
    $Gender = $_POST['Gender'];
    $Department = $_POST['Department'];
    $Roll = $_POST ['Roll'];
    //$gender=$_POST['gender'];

    include "database_connection.php";


    $insert_query = "INSERT INTO students(studentName,Gender,Department,Roll) values('$studentName','$Gender','$Department','$Roll')";
    $insert_query = mysqli_query($connection, $insert_query);

    if ($insert_query) {
        echo 'Data has been saved successfully';
    } else {
        echo 'Data has not been saved successfully';
  
  }
  header("Location:registration.php");
  
}

?>
    


