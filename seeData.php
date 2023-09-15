<?php include 'header.php';?>

<div class="about mt-5">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     

                  <?php
$conn=mysqli_connect("localhost","root","","hospital");



$sql = "SELECT * FROM paitent";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    echo '<table class="table table-bordered table-striped">';
    echo '<thead class="thead-dark"><tr><th>ID</th><th>Name</th><th>Address</th><th>Tel No</th><th>Description</th></tr></thead>';
    echo '<tbody>';

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['address'] . '</td>';
        echo '<td>' . $row['tel'] . '</td>';
        echo '<td>' . $row['description'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
} else {
    echo '<div class="alert alert-info">No records found.</div>';
}


$conn->close();
?>



                  </div>
               </div>



               <div class="col-md-5 mt-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/pngegg (30).png" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>

      </body>
</html>