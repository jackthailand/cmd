<?php
include 'conn.php';
 $id=$_REQUEST["idd"];
 if(!empty($_FILES)){
 $path = "uploads/";
 $name = $_FILES['fileupload']['name'];
 $tmp = $_FILES['fileupload']['tmp_name'];
 $FileType = strtolower(pathinfo($name,PATHINFO_EXTENSION));
 	if($FileType=="pdf"){
 				$new_file_name = $id.".".$FileType;
        //echo "$new_file_name";
 				move_uploaded_file($tmp,$path.$new_file_name);
        $sql="UPDATE `cmd` SET `filename` = '$new_file_name' WHERE `cmd`.`id` = $id;";
        if (mysqli_query($con,$sql)){
          echo '<script language="javascript">';
          echo 'alert("บันทึกข้อมูลเรียบร้อย")';
          echo '</script>';
          echo '<script language="javascript">window.location.href ="indexadmin.php"</script>';
        }
 	    }else {
        echo '<script language="javascript">';
        echo 'alert("กรุณาอับโหลดไฟล์ .pdf เท่านั้น")';
        echo '</script>';
        echo '<script language="javascript">window.location.href ="indexadmin.php"</script>';
       }
    }

 ?>
