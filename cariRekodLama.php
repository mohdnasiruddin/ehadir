<?php 

include 'top.php'; 

if(($_SESSION['level'])!="0"){
  header("Location: login.php");
}

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include 'sidebarguru.php'; ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php include 'topbar.php'; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Carian Tarikh</h6>
            </div>
            <form name="cariDate" method="post" action="">
            <div class="card-body">
              Pilih tarikh : <input type="date" name="tarikh">

                  <button class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-search"></i>
                    </span>
                    <span class="text">Cari</span>
                  </button>
            </form>



            </div>
          </div>


        <?php if (isset($_POST['tarikh'])) { ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan e-Kehadiran KVDSAZI</h6>
            </div>
            <div class="card-body">
              <div class="">
                
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      <th align="center">Bil</th>
                      <th>Nama</th>
                      <th align="center">Tarikh</th>
                      <th align="center">Masa</th>
                      <th align="center">Suhu</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 


                      //$udf = explode("/",$_POST['tarikh']);
                      //echo $_POST['tarikh'];
                      $thn = $_SESSION['tahun'];
                      $cls = $_SESSION['kelas'];
                      $dateDicari = $_POST['tarikh']; //$udf[2]."-".$udf[1]."-".$udf[0];

                      $data3 = mysqli_query($connection,"SELECT * FROM studinfo WHERE stud_year='$thn' AND stud_class='$cls'");
//                      $data3 = mysqli_query($connection,"SELECT  studinfo.*, hadirinfo.* from studinfo INNER JOIN hadirinfo INNER JOIN userinfo ON studinfo.stud_id = hadirinfo.stud_id WHERE studinfo.stud_year = userinfo.user_year AND studinfo.stud_class = userinfo.user_class ");

                      $no = 1;
                      while ($info3=mysqli_fetch_array($data3)) 
                      {
                        if( ($dateDicari > $info3['stud_disable']) && $info3['stud_status'] == '1' ){
                          continue;
                        }
                      
                   ?>
                  
                    <tr>
                      <td align="center"><?php echo $no; ?></td>
                      <td><?php echo $info3['stud_name']; ?></td>

                      <?php 
                        $idPel = $info3['stud_id'];
                        //$tarikh = date("Y-m-d");

                        $data4 = mysqli_query($connection, "SELECT * FROM hadirinfo WHERE stud_id = '$idPel' AND hadir_date = '$dateDicari' ");

                        if(mysqli_num_rows($data4) == 0){ 

                         
                          ?>

                          <td align="center" colspan="3" class="bg-gradient-danger text-white">
                           TIADA DATA
                          </td>

                        <?php
                        
                        } else {

                        while ($info4=mysqli_fetch_array($data4)) {
                      ?>
                      <td align="center"><?php echo $info4['hadir_date']; ?></td>
                      <td align="center"><?php echo $info4['hadir_time']; ?></td>
                      <td align="center"><?php echo $info4['hadir_suhu']; ?></td>
                    <?php } }?>

                    </tr>
                    
                  
                <?php 
                $no++;
              } ?></tbody>
                </table>
             
                
              </div><br><br><br>
                  <a href="report.php?thn=<?php echo $thn ;?>&kls=<?php echo $cls ;?>&tarikh=<?php echo $dateDicari;?>" target="_blank" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-print"></i>
                    </span>
                    <span class="text">Cetak</span>
                  </a>
            </div>
          </div>
          <?php } ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include 'footer.php'; ?>
</body>

</html>
