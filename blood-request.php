<?php
error_reporting(0);
$bloodgroup = $_POST['bloodgroup'];
$district = $_POST['district'];

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'test');
$sql = "select * from blood where bloodgroup = '$bloodgroup' && district = '$district'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num >= 1){ 
    while($op = mysqli_fetch_assoc($result)){
        echo "
        <style>
        td{
            border: 2px solid;
            background: lightblue;
        }
        </style>
        <table>
        <tr>
            <td>NAME</td>
            <td>GENDER</td>
            <td>DISTRICT</td>
            <td>PHONENUMBER</td>
            <td>BOODGROUP</td>
        </tr>
        <tr>
            <td>".$op[name]."</td>
            <td>".$op[gender]."</td>
            <td>".$op[district]."</td>
            <td>".$op[phonenumber]."</td>
            <td>".$op[bloodgroup]."</td>
        </tr>
        </table><br>";
    }
}
else{
    echo "<h2>No Donor available now for ".$bloodgroup." group</h2>";
}
?>