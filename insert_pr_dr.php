<?php
include 'conn.php';
$from=$_POST["text_from"];
$to=$_POST["text_to"];
$id_doc_in=$_POST["id_doc_in"];
$date_doc=$_POST["date_doc"];
$subject=$_POST["text_subject"];
$NameUser=$_POST["text_NameUser"];
$sql="SELECT max(id)+3 as total FROM pr_dr";
$result=$con->query($sql);
$data=$result->fetch_assoc();
$total=$data["total"];

$sql="INSERT INTO pr_dr(id,r_id,r_id_doc,r_from,r_date_doc,r_to,r_subject,r_NameUser)
VALUES('$total','','$id_doc_in','$from','$date_doc','$to','$subject','$NameUser')";

if (mysqli_query($con,$sql)){
	echo '<script language="javascript">';
	echo 'alert("บันทึกข้อมูลเรียบร้อย")';
	echo '</script>';
	echo '<script language="javascript">window.location.href ="recepdoc.php"</script>';

}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
