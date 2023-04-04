<!DOCTYPE html>
<html>
    <head>
        <title>SOP - Admin</title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/navbar.css">
        <link rel="stylesheet" type="text/css" href="../CSS/imagegallery.css">
        <link rel="stylesheet" type="text/css" href="../CSS/animations.css">
        <link rel="stylesheet" type="text/css" href="../CSS/table.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body>
<header>
    <a href="homepage.html"><img class="center" style="margin-bottom: 1%;" src="../Images/SOPLogo.jpg" width="7%"></a>
    <navbar>
    <ul>
        <li><a class="active" href="homepage.html">Home</a></li>
        <li><a href="adoption-form.html">Adopt Now!</a></li>
        <li><a href="photogallery.html">Gallery</a></li>
        <li><a href="aboutus.html">About</a></li>
    </ul>
    </navbar>
</header>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "straysofpanvel");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM adoptionrequests";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn); 
    ?>
    <h2>Current Adoption Requests: </h2>
    <table class="styledtable">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Pet Name</th>
            <th>Pet Age</th>
            <th>Pet Breed</th>
            <th>Gender</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['PhoneNumber']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['PrimAddress']; ?></td>
            <td><?php echo $row['PetName']; ?></td>
            <td><?php echo $row['PetAge']; ?></td>
            <td><?php echo $row['PetBreed']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "straysofpanvel");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM rescuerequest";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn); 
    ?>
    <h2>Current Rescue Requests: </h2>
    <table class="styledtable">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Rescue Case</th>
            <th>Area of Rescue</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo $row['FullName']; ?></td>
            <td><?php echo $row['PhoneNumber']; ?></td>
            <td><?php echo $row['rescueCase']; ?></td>
            <td><?php echo $row['areaofrescue']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "straysofpanvel");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM volunteer";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($conn); 
    ?>
    <h2>Current Volunteering Requests: </h2>
    <table class="styledtable">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Street</th>
            <th>City</th>
            <th>Zipcode</th>
            <th>States</th>
            <th>Other Organisation</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['phoneNumber']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['street']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['zipcode']; ?></td>
            <td><?php echo $row['states']; ?></td>
            <td><?php echo $row['otherorg']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <hr style="border: none; border-top: 4px solid black; margin: 20px 0;">
<footer>
    <div class="footer-row">
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="homepage.html">Home</a></li>
          <li><a href="adoption-form.html">Adopt Now!</a></li>
          <li><a href="photogallery.html">Gallery</a></li>
          <li><a href="aboutus.html">About</a></li>      
          <li><a href="volunteer.html">Volunteering Form</a></li>
          <li><a href="AdminLogin.html">Admin Login</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <ul>
          <li>123 Main Street</li>
          <li>Panvel, Maharashtra 410206</li>
          <li>Phone: 983472323</li>
          <li>Email: info@straysofpanvel.com</li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Follow Us</h4>
        <a href="https://www.instagram.com/straysofpanvel/" target="_blank"><img src=../Images/instalogo.png></a>
      </div>
    </div>
    <p>&copy; 2023 Strays of Panvel. All Rights Reserved.</p>
</footer>   
</body>
</html>
