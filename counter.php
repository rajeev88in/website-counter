<?php
include_once('dbconfig.php');
/*$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/php/dbconfig.php";
include_once($path); */
// Check connection  die("ERROR: Could not connect. " . $conn->connect_error);

$sql=mysqli_query($conn, "SELECT * FROM pinku_counter");
if(mysqli_num_rows($sql)>0)
{
    while($row = $sql->fetch_assoc()) 
    {
        $data = $row['countid'];
    }
}
++$data;
  $fmt = new NumberFormatter($locale = 'en_IN', NumberFormatter::DECIMAL);
echo $fmt->format($data);
$sql1="UPDATE pinku_counter SET countid = $data";
$ref = $conn->query($sql1);
// Close connection
//$conn->close();
?>
