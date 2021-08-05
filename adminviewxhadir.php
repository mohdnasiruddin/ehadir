<?php include 'top.php'; 
include 'conn.php';

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

<?php include 'topbar.php'; 



  $tarikhHariIni = date("Y-m-d");
  $masa = date("H:i:s");
  
	$ud = explode('-',$tarikhHariIni);
	$dahUbah = $ud[2]."-".$ud[1]."-".$ud[0];

  
  //senarai nama pelajar x hadir
  $xHadir = mysqli_query($connection,"SELECT * FROM studinfo WHERE  stud_id NOT IN (SELECT  stud_id from hadirinfo WHERE hadir_date='$tarikhHariIni') AND (stud_year='2 dvm' OR stud_year='2 svm' OR (stud_year='2 svm' AND stud_class='SKM')) AND stud_status='0'");

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

                  <div class="row">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Senarai nama pelajar tidak hadir. (<?php echo $dahUbah." - ".$masa ;?>)</h6>
            </div>
            <div class="card-body">

                            <div class="table-responsive">

                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bil</th>
                      <th>Tahun</th>
                      <th>Kelas</th>
                      <th>Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

                      $no = 1;
                      while ($info3=mysqli_fetch_array($xHadir)) 
                      {

                      
                   ?>
                  
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $info3['stud_year']; ?></td>
                      <td><?php echo $info3['stud_class']; ?></td>
                      <td><?php echo $info3['stud_name']; ?></td>
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
<!-- 
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
              </div> -->
