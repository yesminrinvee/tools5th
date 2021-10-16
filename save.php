<?php
session_start();
//echo '<pre>';
//print_r($_GET);
/*debugger*/
//var_dump();
getData();/*Function is being called*/

function getData()
{
    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];

    include "database_connection.php";


    $insert_query = "INSERT INTO students(studentName,Roll) values('$studentName','$studentId')";
    $insert_query = mysqli_query($connection, $insert_query);

    if ($insert_query) {
        echo 'Data has been saved successfully';
    } else {
        echo 'Data has not been saved successfully';
    }

    if ($studentName == 'iiuc' && $studentId == '24434') {
        $_SESSION['studentName'] = $studentName;
        header('location:dasboard.php');/*redirect*/
    }
?>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <td>Student Name</td>
            <td>Student ID</td>
        </tr>
        <tr>
            <td><?php echo $studentName ?></td>
            <td><?php echo $studentId ?></td>
        </tr>
    </table>
<?php
}

?>