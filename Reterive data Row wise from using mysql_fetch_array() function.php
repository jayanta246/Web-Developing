<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike_rental_system";

$conn=new mysqli($servername, $username, $password, $dbname, );

if($conn->connect_error)
{
	die("connection error". $conn->connect-error).'<br/>';
}
echo "connection succesfull". $conn->connect_error. '<br/>';


$sql ="SELECT * from student";
$result =mysqli_query($conn, $sql);
$row=  mysqli_fetch_array($result);


while($row= mysqli_fetch_array($result))
{
	echo $row['id']. ' '. $row['name']. '<br/>';
	
}
mysqli_close($conn);


/*
$result variable not hold the actual data of the query it only hold the reference of the data produced by the query

we can retrive data row wise using mysqli_fetch_array(). one row at a time.

we use . operator to concatenating the string. 



*/
?>

