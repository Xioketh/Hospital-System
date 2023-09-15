<?php include 'header.php';?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $conn=mysqli_connect("localhost","root","","hospital");


   $name = $_POST['name'];
   $address = $_POST['address'];
   $tel = $_POST['tel'];
   $description = $_POST['description'];

   $sql = "INSERT INTO paitent (name, address, tel, description)
           VALUES ('$name', '$address', '$tel', '$description')";

if ($conn->query($sql) === TRUE) {
    echo '<div class="alert alert-success mt-3">Data saved successfully!</div>';
} else {
    echo '<div class="alert alert-danger mt-3">Error: ' . $sql . '<br>' . $conn->error . '</div>';
}

    $conn->close();
}
?>

</body>
</html>



