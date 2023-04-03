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
    $first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $addressx = $_POST['address'];
    $petname = $_POST['petname'];
    $petage = $_POST['petage'];
    $petbreed = $_POST['petbreed'];
    $gender = $_POST['gender'];
    $sql_query = "INSERT INTO adoptionrequests (firstName, lastName, PhoneNumber, Email, primAddress, PetName, PetAge, PetBreed, Gender)
        VALUES ('$first_name', '$last_name','$phone', '$email', '$addressx', '$petname', '$petage', '$petbreed', '$gender')";
	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>