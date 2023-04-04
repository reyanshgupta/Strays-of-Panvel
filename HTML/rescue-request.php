<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "straysofpanvel";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
if(isset($_POST['save']))
{
    $fullname=$_POST['name'];
    $phone = $_POST['phone'];
    $rescueCase=$_POST['dogcase'];
    $location=$_POST['location'];
    $sql_query = "INSERT INTO rescuerequest (FullName, PhoneNumber, rescueCase, areaofrescue) 
    VALUES ('$fullname','$phone', '$rescuecase', '$location')";
    if (mysqli_query($conn, $sql_query)) 
    {
       echo "<script>alert('Request for rescue raised successfully! Our team will get back to you shortly. ');</script>";
    } 
    else
    {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<!-- (FullName, PhoneNumber, rescueCase, areaofrescue) -->