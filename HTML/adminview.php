<!DOCTYPE html>
<html>
    <head>
        <title>SOP - Admin</title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/navbar.css">
        <link rel="stylesheet" type="text/css" href="../CSS/imagegallery.css">
        <link rel="stylesheet" type="text/css" href="../CSS/animations.css">
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
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>Last Name</th>
            <th>Last Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<footer>
    <p>&copy; 2023 Strays of Panvel. All Rights Reserved.</p>
    <ul>
        <li><a class="active" href="homepage.html">Home</a></li>
        <li><a href="adoption-form.html">Adopt Now!</a></li>
        <li><a href="photogallery.html">Gallery</a></li>
        <li><a href="aboutus.html">About</a></li>
    </ul>        
</footer>
</body>
</html>
