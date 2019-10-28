<?php
include("conn.php");
$id_cmd=$_POST["id_cmd"];
$date_cmd=$_POST["date_cmd"];
$id=$_POST["id"];
$detail_cmd=$_POST["detail_cmd"];
$department=$_POST["department"];
$signer=$_POST["signer"];
$position=$_POST["position"];
$sql="UPDATE `cmd` SET `date_cmd` = '$date_cmd', `detail_cmd` = '$detail_cmd',
 `department` = '$department', `signer` = '$signer',
  `Position` = '$position' WHERE `cmd`.`id` = $id;";
if (mysqli_query($con,$sql)){
	echo '<script language="javascript">';
	echo 'alert("แก้ไขข้อมูลเรียบร้อย")';
	echo '</script>';
	echo '<script language="javascript">window.location.href ="indexadmin.php"</script>';

}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
