<!DOCTYPE html>
<?php
session_start();

if ($_SESSION["username"]!='user04'){  //check session

	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ระบบสารบรรณอิเล็กทรอนิกส์</title>
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
	  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
		<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
	<style>
	body{
		font-family: 'Kanit', sans-serif;
			}

	</style>

</head>
<body class="hold-transition sidebar-collapse sidebar-mini">

<div class="wrapper">
<?php include 'conn.php'; ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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
      <span class="brand-text font-weight-light">สารบรรณอิเล็กทรอนิกส์</span>

    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="pic/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["depart"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>
					<li class="nav-item has-treeview">
						<a href="#" class="nav-link active">
							<i class="nav-icon fa fa-sticky-note"></i>
							<p>
								หนังสือรับ
							</p>
						</a>
					</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                พิมพ์รายงาน
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                ออกจากระบบ
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
            <h1 class="m-0 text-dark">หนังสือรับ<?php echo $_SESSION["depart"]; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li>
              <li class="breadcrumb-item active">รายการหนังสือ</li>
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
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                    <a href="#addnew" data-toggle="modal"><button type="button" class="btn btn-info float-left"><i class="fa fa-plus"></i>ลงรับหนังสือ</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php include 'pr_recepdoc_modal.php' ?>
                <table id="example2" class="table table-bordered table-striped">


                  <thead>
                  <tr>

                    <th class="text-center" style="width: 50px">เลขรับ</th>
										<th class="text-center" style="width: 100px">วันที่/เวลา</th>
                    <th class="text-center"style="width: 100px">ที่</th>
										<th class="text-center" style="width: 100px">ลงวันที่</th>
                    <th class="text-center" style="width: 100px">จาก</th>
                    <th class="text-center" style="width: 100px">ถึง</th>
                    <th class="text-center" style="width: 200px">เรื่อง</th>
                    <?php
                    if($_SESSION["status"]==1){ ?>
                    <th class="text-center">Action</th>
                    <th class="text-center">user</th>
                    <?php } ?>
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
          						return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
          					}
										function DateThaiday($strDate1)
										{
											$strYear = date("Y",strtotime($strDate1))+543;
											$strMonth= date("n",strtotime($strDate1));
											$strDay= date("j",strtotime($strDate1));
											$strHour= date("H",strtotime($strDate1));
											$strMinute= date("i",strtotime($strDate1));
											$strSeconds= date("s",strtotime($strDate1));
											$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
											$strMonthThai=$strMonthCut[$strMonth];
											return "$strDay $strMonthThai $strYear";
										}

          			 	$sql="SELECT * FROM edoc.pr_dr ORDER BY id desc";
          			 	$result=$con->query($sql);
          			 	if($result->num_rows>0){
          			 		while($row=$result->fetch_assoc()){
          						$did=$row["id"];
          			 			$id=$row["r_id"];
											$r_id_doc=$row["r_id_doc"];
											$r_date_doc=$row["r_date_doc"];
          			 			$date=$row["r_date"];
          			 			$from=$row["r_from"];
          			 			$to=$row["r_to"];
          			 			$subject=$row["r_subject"];
          						$NameUser=$row["r_nameuser"];


          			 	?>
                      <tr>
                          <td class="text-center"><?php echo $id ?></td>
                          <td class="text-center"><?php echo DateThai($date) ?></td>
													<td class="text-center"><?php echo $r_id_doc ?></td>
													<td class="text-center"><?php echo DateThaiday($r_date_doc) ?></td>
                          <td class="text-center"><?php echo $from ?></td>
                          <td class="text-center"><?php echo $to ?></td>
                          <td class="text-center"><?php echo $subject ?></td>
          				<?php
          				if($_SESSION["status"]==1){ ?>
                          <td class="text-center"><a href="form_edit.php?did=<?php echo $did ?>"> แก้ไข</a></td>
          				<td class="text-center"><?php echo $NameUser ?></td>
          				<?php } ?>



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
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
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
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
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
</body>
</html>
<?php } ?>
