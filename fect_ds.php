<?php
 //fetch.php
 include("conn.php");
 if(isset($_POST["id"]))
 {
      $query = "SELECT * FROM cmd WHERE id = '".$_POST["id"]."'";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_array($result);
      echo json_encode($row);
 }
 ?>
