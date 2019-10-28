<?php
session_start();
if(isset($_REQUEST['txt_Username'])){
	include("conn.php");
	$username=$_REQUEST["txt_Username"];
	$password=$_REQUEST["txt_Password"];


	$sql="SELECT * FROM user WHERE username='".$username."' and password='".$password."' ";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);
			$_SESSION["username"] = $row["username"];
			$_SESSION["password"] = $row["password"];
			$_SESSION["depart"] = $row["depart"];
			$_SESSION["status"] = $row["status"];

		if($_SESSION["status"]){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: indexadmin.php");

                      }

		}else{
				echo "<script>";
                echo "alert(\" Username หรือ  Password ไม่ถูกต้อง\");";
                echo "window.history.back()";
				echo "</script>";

			 }

}
?>
