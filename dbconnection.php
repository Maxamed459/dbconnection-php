<style>
    table {
        border-collapse: collapse;
        /* border: 1px solid #000; */
        background-color: #29235c;
        color: #ffdb59;
        box-shadow: 0 0 5px #000;
        margin: auto;
    }
    td {
        border: 1px solid #fff;
        padding: 15px;
    }
    .head {
        color: #fff;
        font-size: 20px;
    }
    h1 {
        text-align: center;
        font-size: 45px;
        color: #29235c;
    }
</style>
<h1>Students Table</h1>
<table>
    <tr class="head">
        <td ><b>Student ID</b></td>
        <td><b>Student Name</b></td>
        <td><b>Student Phone</b></td>
        <td><b>Student Parent</b></td>
        <td><b>Student Cms</b></td>
    </tr>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cms5a";

$con = mysqli_connect($host,$user,$pass,$dbname);
$command = mysqli_query($con, "select * from students");
while($result = mysqli_fetch_array($command)){
    echo "<tr><td>".$result['std_id']."</td><td>".$result['std_name']."</td><td>".$result['std_phone']."</td><td>".$result['std_parent']."</td>
    <td>".$result['std_cms']."</td></tr>";
    // echo "<tr><td>".$result['std_name']."</td></tr>";
    echo "<br>";

}

?>
</table>
