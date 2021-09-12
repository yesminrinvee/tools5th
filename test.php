<?php
include 'header.php';
//echo 'Hello world';
//
//$data=100; /*variable declaration*/
//echo $data;
//$stringName="<br></br>CSE,IIUC";
//echo $stringName;
//
//$dataArray=array(10,12,4,5,7);/*Indexed array*/
//
//sort($dataArray);
//for ($index=0;$index<count($dataArray);$index++)
//{
//    echo '<br>'.$dataArray[$index];
//}
//echo '<br>##using foreach loop## ';
//foreach ($dataArray as $valueOfArray)
//{
//    echo '<br>'.$valueOfArray;
//}
//
//$associativeArray=array( /*Associative array*/
//    "Ruma"=>'CSE',
//    "Jannat"=>'EEE',
//    "Nafisa"=>"CE"
//);
///*key=>value*/
//echo '<br>##using foreach loop## ';
//
//foreach ($associativeArray as $key=>$value )
//{
//    echo "<br>Key is=".$key.' and value is='.$value;
//}

?>
<form method="post" action="save.php">
    <table>
        <tr>
            <td>Name</td>
            <td>
                <input name="studentName" placeholder="Enter student name" id="studentName">
            </td>
        </tr>
        <tr>
            <td>Roll</td>
            <td>
                <input name="roll" placeholder="Enter roll" id="roll">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submitButton" value="Save">
            </td>
        </tr>
    </table>
</form>

<?php
include 'footer.php';
?>