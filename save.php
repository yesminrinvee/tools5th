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
    $roll = $_POST['roll'];
    if ($studentName == 'iiuc' && $roll == '24434') {
        $_SESSION['studentName']=$studentName;
        header('location:dasboard.php');/*redirect*/
    }
    ?>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <td>Student Name</td>
            <td>Roll</td>
        </tr>
        <tr>
            <td><?php echo $studentName ?></td>
            <td><?php echo $roll ?></td>
        </tr>
    </table>
    <?php
}

?>