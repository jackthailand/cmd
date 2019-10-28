<?php
include 'conn.php';
$department=$_POST["department"];//เรื่อง
$detail_cmd=$_POST["detail_cmd"];//เรื่อง
$signer=$_POST["signer"];
$position=$_POST["position"];
$sql="SELECT max(id)+3 as total FROM cmd";
$result=$con->query($sql);
$data=$result->fetch_assoc();
$total=$data["total"];
$datetoday=date("Y-m-d");
$sql="INSERT INTO cmd(id,id_cmd,date_cmd,detail_cmd,department,signer,position)
VALUES('$total',(SELECT
   		CONCAT(RIGHT(d + 10001,4),
        ('/'),
        RIGHT(YEAR(NOW())+543, 4))
		FROM (SELECT 0 as d
        UNION ALL
        SELECT MAX( LEFT( id_cmd, 4) )
		FROM cmd WHERE RIGHT(id_cmd, 4)=LEFT(YEAR(NOW())+543,4)
		) AS TMP
		order by d DESC LIMIT 1),'$datetoday','$detail_cmd','$department','$signer','$position')";

if (mysqli_query($con,$sql)){
	echo '<script language="javascript">';
	echo 'alert("บันทึกข้อมูลเรียบร้อย")';
	echo '</script>';
	echo '<script language="javascript">window.location.href ="indexadmin.php"</script>';

}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
