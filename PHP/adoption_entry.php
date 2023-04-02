<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "database123";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
    // Get form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $petname = $_POST['petname'];
    $petage = $_POST['petage'];
    $petbreed = $_POST['petbreed'];
    $gender = $_POST['gender'];

    // Insert data into MySQL database
    $sql = "INSERT INTO adoption (fname, lname, phone, email, address, petname, petage, petbreed, gender)
            VALUES ('$fname', '$lname', '$phone', '$email', '$address', '$petname', '$petage', '$petbreed', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>