<?php include 'top.php'; 

if(($_SESSION['level'])!="1"){
  header("Location: login.php");
}

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include 'sidebar.php';?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php include 'topbar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

                  <div class="row">

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">% kehadiran hari ini</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah kehadiran hari ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">200 / 240</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kehadiran Pelajar Luar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kehadiran pelajar Asrama</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
<!--         <div class="card shadow mb-4">
                      <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan e-Kehadiran KVDSAZI</h6>
            </div>
            <div class="card-body">

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="date" id="datepicker" class="form-control bg-light border-0 small"  aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        </div>
 -->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan e-Kehadiran KVDSAZI</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">


                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tahun</th>
                      <th>Kelas</th>
                      <th>Nama</th>
                      <th>Tarikh</th>
                      <th>Masa</th>
                      <th>Suhu</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      // $data3 = mysqli_query($connection,"SELECT  studinfo.*, studinfo.stud_year,studinfo.stud_class,studinfo.stud_name,hadirinfo.hadir_date,hadirinfo.hadir_time,hadirinfo.hadir_suhu from studinfo INNER JOIN hadirinfo ON studinfo.stud_id = hadirinfo.stud_id ");

                      $tarikhHariIni = date("Y-m-d");

                      $data3 = mysqli_query($connection,"SELECT  studinfo.*, hadirinfo.hadir_date,hadirinfo.hadir_time,hadirinfo.hadir_suhu from studinfo INNER JOIN hadirinfo ON studinfo.stud_id = hadirinfo.stud_id  WHERE hadirinfo.hadir_date='$tarikhHariIni'");

                      $no = 1;
                      while ($info3=mysqli_fetch_array($data3)) 
                      {

                      
                   ?>
                  
                    <tr>
                      <td><?php echo $info3['stud_year']; ?></td>
                      <td><?php echo $info3['stud_class']; ?></td>
                      <td><?php echo $info3['stud_name']; ?></td>
                      <td><?php echo $info3['hadir_date']; ?></td>
                      <td><?php echo $info3['hadir_time']; ?></td>
                      <td><?php echo $info3['hadir_suhu']; ?></td>
                    </tr>
                    
                  
                <?php 
                $no++;
              } ?></tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include 'footer.php'; ?>




</body>

</html>
