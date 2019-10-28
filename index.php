<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ระบบคำสั่งเทศบาลนครภูเก็ต</title>
  <link rel="icon" href="pic/favicon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="preloader.css">
  <!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
	<style>
	body{
		font-family: 'Kanit', sans-serif;
			}

	</style>

</head>
<body class="hold-transition sidebar-collapse sidebar-mini">
	<div class="preloader d-flex align-items-center justify-content-center">
      <div class="circle-preloader">
          <img src="pic/logo.png" alt="">
          <div class="foode-preloader">
              <span></span>
          </div>
      </div>
  </div>
<div class="wrapper">
<?php include 'conn.php'; ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">ระบบออกเลขคำสั่ง</span>

    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="pic/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">user</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                พิมพ์รายงาน
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                เข้าสู่ระบบ
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">คำสั่งเทศบาลนครภูเก็ต</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
              <li class="breadcrumb-item active">รายการหนังสือคำสั่ง</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
					<?php
									$sql2="SELECT COUNT(*) AS total FROM cmd";
								 	$result2=$con->query($sql2);
								 	$data2=$result2->fetch_assoc();
									$total=$data2["total"];
						?>
					<div class="col-lg-4 col-6">
						<!-- small box เรื่องร้องทุกข์ทั้งหมด -->
						<div class="small-box bg-success">
							<div class="inner">
								<h3><?php echo number_format($total); ?><sup style="font-size: 20px"> เรื่อง</sup></h3>
								<h5>จำนวนเลขคำสั่งทั้งหมด</h5>
							</div>
							<div class="icon">
								<i class="fa fa-recycle"></i>
							</div>

						</div>
					</div>
					<?php
									$yearnow=date("Y");
									$sql3="SELECT COUNT(*) AS total1 FROM cmd where YEAR(date_cmd)=$yearnow";
									$result3=$con->query($sql3);
									$data3=$result3->fetch_assoc();
									$total1=$data3["total1"];
						?>
					<div class="col-lg-4 col-6">
						<!-- small box เรื่องร้องทุกข์ทั้งหมด -->
						<div class="small-box bg-warning">
							<div class="inner">
								<h3><?php echo $total1; ?><sup style="font-size: 20px"> เรื่อง</sup></h3>
								<h5>ในปี <?php echo $yearnow+543 ?> </h5>
							</div>
							<div class="icon">
								<i class="fa fa-bar-chart"></i>
							</div>

						</div>
					</div>
          <div class="col-12">
            <!-- /.card -->
<?php include 'add_doc_modal.php' ?>
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">


                <table id="example2" class="table table-bordered table-striped">

                  <thead>
                  <tr>

                    <th class="text-center" style="width: 30px">เลขที่</th>
                    <th class="text-center" style="width: 100px">วัน/เดือน/ปี</th>
                    <th class="text-center">เรื่อง</th>
                    <th class="text-center" style="width: 100px">หน่วยงาน</th>
                    <th class="text-center" style="width: 150px">ผู้ลงนาม</th>
										<th class="text-center" style="width: 150px">ตำแหน่ง</th>
                    <th class="text-center" style="width: 50px">#</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
          					function DateThai($strDate)
          					{
          						$strYear = date("Y",strtotime($strDate))+543;
          						$strMonth= date("n",strtotime($strDate));
          						$strDay= date("j",strtotime($strDate));
          						$strHour= date("H",strtotime($strDate));
          						$strMinute= date("i",strtotime($strDate));
          						$strSeconds= date("s",strtotime($strDate));
          						$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
          						$strMonthThai=$strMonthCut[$strMonth];
          						return "$strDay $strMonthThai $strYear";
          					}

          			 	$sql="SELECT * FROM cmd ORDER BY id desc";
          			 	$result=$con->query($sql);
          			 	if($result->num_rows>0){
          			 		while($row=$result->fetch_assoc()){
											$id=$row["id"];
          						$id_cmd=$row["id_cmd"];
          			 			$date_cmd=$row["date_cmd"];
          			 			$detail_cmd=$row["detail_cmd"];
          			 			$departmen=$row["department"];
          			 			$signer=$row["signer"];
          			 			$position=$row["Position"];
											$filename=$row["filename"]


          			 	?>
                      <tr>
                          <td class="text-center"><?php echo $id_cmd ?>


													</td>
                          <td class="text-center"><?php echo DateThai($date_cmd); ?></td>
                          <td class="text-center"><?php echo $detail_cmd; ?></td>
                          <td class="text-center"><?php echo $departmen; ?></td>
                          <td class="text-center"><?php echo $signer; ?></td>
													<td class="text-center"><?php echo $position; ?></td>

                  		<td class="text-center">
												<div class="btn-group">

																				<?php
																				if ($filename==null) {
																					?>
									                      <a ><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
																			<?php }else { ?>
																				   <a href="uploads/<?php echo $filename ?>"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
																		<?php	} ?>

									        </div>
													<?php
													if ($filename==null) {
														?>
													<span class="badge badge-danger">ไม่มีไฟล์</span></td>
														<?php
													}
													 ?>
												</td>



                      </tr>
          						<?php
          					  		}
          					}
          					  ?>


                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->


<script>
(function ($) {
    'use strict';
    var browserWindow = $(window);
    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
  })(jQuery);
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
$(document).ready(function(){
  $('.delete_data').click(function(){
        var uid=$(this).attr("id"); //รับค่าid ผ่านปุ่ม ผ่านแอดทริบิ่ว
        var status=confirm("ต้องการลบข้อมูลใช่หรือไม่")
        if(status){
          $.ajax({
            url:"delete_student.php", //ส่งไปทำงานที่ select.php
            method:"post",  //รูปแบบการส่งเป็นแบบ POST
            data:{id:uid}, //ส่ง ID ไป
            success:function(data){  // data มาจาก echo หน้า select
              location.reload();
            }
        });
        }
    });




    $('.view_data').click(function(){
        var uid=$(this).attr("id"); //รับค่าid ผ่านปุ่ม ผ่านแอดทริบิ่ว
        $.ajax({
            url:"select.php", //ส่งไปทำงานที่ select.php
            method:"post",  //รูปแบบการส่งเป็นแบบ POST
            data:{id:uid}, //ส่ง ID ไป
            success:function(data){  // data มาจาก echo หน้า select
              $('#detail').html(data)
              $('#view').modal('show');
            }
        });
    });
		$("#example2").on("click", ".edit_data", function(){
        var uid=$(this).attr("id"); //รับค่าid ผ่านปุ่ม ผ่านแอดทริบิ่ว
        $.ajax({
            url:"fect_ds.php", //ส่งไปทำงานที่ fetch_student.php
            method:"POST",  //รูปแบบการส่งเป็นแบบ POST
            data:{id:uid}, //ส่ง ID ไป
            dataType:'json',
            success:function(data){  // data มาจาก echo หน้า fetch_student.php
							$('#id').val(data.id);
							$('#id_cmd').val(data.id_cmd);
							$('#date_cmd').val(data.date_cmd);
							$('#detail_cmd').val(data.detail_cmd);
							$('#department').val(data.department);
							$('#signer').val(data.signer);
							$('#Position').val(data.Position);
              $('#edit_data').modal('show');
            }
        });
    });

		$("#example2").on("click", ".uploadfile", function(){
				var uid=$(this).attr("id"); //รับค่าid ผ่านปุ่ม ผ่านแอดทริบิ่ว
				$.ajax({
						url:"fect_uploadfile.php", //ส่งไปทำงานที่ fetch_student.php
						method:"POST",  //รูปแบบการส่งเป็นแบบ POST
						data:{id:uid}, //ส่ง ID ไป
						dataType:'json',
						success:function(data){  // data มาจาก echo หน้า fetch_student.php
							$('#idd').val(data.id);
							$('#uploadfile').modal('show');
						}
				});
		});

  });


</script>

</body>
</html>
