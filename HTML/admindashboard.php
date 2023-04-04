<!DOCTYPE html>
<html>
    <head>
        <title>SOP - Admin</title>
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <link rel="stylesheet" type="text/css" href="../CSS/navbar.css">
        <link rel="stylesheet" type="text/css" href="../CSS/imagegallery.css">
        <link rel="stylesheet" type="text/css" href="../CSS/animations.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
        <style>
            table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            font-size: 1em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            th {
            background-color: black;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
            padding: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            }

            td {
            border-bottom: 1px solid #f2f2f2;
            padding: 12px;
            }

            tr:hover {
            background-color: #f5f5f5;
            }

            @media screen and (max-width: 600px) {
            table {
                border: 0;
            }
            table thead {
                display: none;
            }
            table tr {
                margin-bottom: 10px;
                display: block;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            table td {
                border-bottom: none;
                position: relative;
                padding-left: 50%;
            }
            table td:before {
                position: absolute;
                top: 12px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
            }
    </style>
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
    <table>
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
<hr style="border: none; border-top: 4px solid black; margin: 20px 0;">
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
