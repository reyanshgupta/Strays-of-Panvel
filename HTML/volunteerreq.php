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
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $states = $_POST['state'];
    $ans = $_POST['ans'];
    $sql_query = "INSERT INTO volunteer (firstName, lastName, phoneNumber, email, street, city, zipcode, states, otherorg)
        VALUES ('$first_name', '$last_name','$phone', '$email', '$street', '$city', '$zipcode', '$states', '$otherorg')";
	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "<script>alert('Thank you for your interest in volunteering for us! Our team will get back to you shortly. ');</script>";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>