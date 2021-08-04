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



  // $bpm1svm =  $bpp1svm = $bpr1svm = $ctp1svm = $hbp1svm = $hsk1svm = $ipd1svm = $isk1svm = $bpm1dvm = $bpp1dvm = $ipd1dvm = $isk1dvm = 0;
  // $tbpm1svm =  $tbpp1svm = $tbpr1svm = $tctp1svm = $thbp1svm = $thsk1svm = $tipd1svm = $tisk1svm = $tbpm1dvm = $tbpp1dvm = $tipd1dvm = $tisk1dvm = 0;

  
  //1 SVM 2021 - 8 kelas
  $bpm1svm = $tbpm1svm = 0;
  $bpp1svm = $tbpp1svm = 0;
  $bpr1svm = $tbpr1svm = 0;
  $ctp1svm = $tctp1svm = 0;
  $hbp1svm = $thbp1svm = 0;
  $hsk1svm = $thsk1svm = 0;
  $ipd1svm = $tipd1svm = 0;
  $isk1svm = $tisk1svm = 0; 

  //2 SVM 2021 - 8 kelas
  $bpm2svm = $tbpm2svm = 0;
  $bpp2svm = $tbpp2svm = 0;
  $bpr2svm = $tbpr2svm = 0;
  $ctp2svm = $tctp2svm = 0;
  $hbp2svm = $thbp2svm = 0;
  $hsk2svm = $thsk2svm = 0;
  $ipd2svm = $tipd2svm = 0;
  $isk2svm = $tisk2svm = 0; 

  //1 DVM 2021 - 6 kelas
  $bpm1dvm = $tbpm1dvm = 0;
  $bpp1dvm = $tbpp1dvm = 0;
  $hbp1dvm = $thbp1dvm = 0;
  $hsk1dvm = $thsk1dvm = 0;
  $ipd1dvm = $tipd1dvm = 0;
  $isk1dvm = $tisk1dvm = 0; 

  //2 DVM 2021 - 4 kelas
  $bpm2dvm = $tbpm2dvm = 0;
  $bpp2dvm = $tbpp2dvm = 0;
  $ipd2dvm = $tipd2dvm = 0;
  $isk2dvm = $tisk2dvm = 0; 



	//kira bilangan pelajar dalam setiap kelas
  $kiraPel = "SELECT * FROM studinfo WHERE stud_status='0'";
  $runKiraPel = mysqli_query($connection,$kiraPel);
  $jum = mysqli_num_rows($runKiraPel);

  $tarikhHariIni = date("Y-m-d");
  $masa = date("H:i:s");
  
	$ud = explode('-',$tarikhHariIni);
	$dahUbah = $ud[2]."-".$ud[1]."-".$ud[0];

	//kira bilangan pelajar hadir dalam setiap kelas
  $data3 = mysqli_query($connection,"SELECT  studinfo.*, hadirinfo.hadir_date,hadirinfo.hadir_time,hadirinfo.hadir_suhu from studinfo INNER JOIN hadirinfo ON studinfo.stud_ic = hadirinfo.stud_ic  WHERE hadirinfo.hadir_date='$tarikhHariIni'");

  $jumHadir = mysqli_num_rows($data3);
  
  //senarai nama pelajar x hadir
  //$xHadir = mysqli_query($connection,"SELECT * FROM studinfo WHERE  stud_id NOT IN (SELECT  stud_id from hadirinfo WHERE hadir_date='2020-08-26') AND (stud_year='1 dvm' OR stud_year='1 svm' OR (stud_year='2 svm' AND stud_class='SKM'))");

  while($hadirKelas = mysqli_fetch_assoc($data3)){
    //**************************** KIRA KEHADIRAN 1 SVM ****************************************
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "BPM"){
      $bpm1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "BPP"){
      $bpp1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "BPR"){
      $bpr1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "HBP"){
      $hbp1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "HSK"){
      $hsk1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "IPD"){
      $ipd1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "ISK"){
      $isk1svm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "CTP"){
      $ctp1svm++;
    }
    //**************************** END KIRA KEHADIRAN 1 SVM ****************************************

    //**************************** KIRA KEHADIRAN 2 SVM ****************************************
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "BPM"){
      $bpm2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "BPP"){
      $bpp2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "BPR"){
      $bpr2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "HBP"){
      $hbp2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "HSK"){
      $hsk2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "IPD"){
      $ipd2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "ISK"){
      $isk2svm++;
    }
    if($hadirKelas['stud_year'] == "2 SVM" AND $hadirKelas['stud_class'] == "CTP"){
      $ctp2svm++;
    }
    //**************************** END KIRA KEHADIRAN 2 SVM ****************************************

    //**************************** KIRA KEHADIRAN 1 DVM ****************************************
    if($hadirKelas['stud_year'] == "1 DVM" AND $hadirKelas['stud_class'] == "BPM"){
      $bpm1dvm++;
    }
    if($hadirKelas['stud_year'] == "1 DVM" AND $hadirKelas['stud_class'] == "BPP"){
      $bpp1dvm++;
    }
    if($hadirKelas['stud_year'] == "1 DVM" AND $hadirKelas['stud_class'] == "HBP"){
      $hbp1dvm++;
    }
    if($hadirKelas['stud_year'] == "1 DVM" AND $hadirKelas['stud_class'] == "HSK"){
      $hsk1dvm++;
    }
    if($hadirKelas['stud_year'] == "1 DVM" AND $hadirKelas['stud_class'] == "IPD"){
      $ipd1dvm++;
    }
    if($hadirKelas['stud_year'] == "1 SVM" AND $hadirKelas['stud_class'] == "ISK"){
      $isk1dvm++;
    }
    //**************************** END KIRA KEHADIRAN 1 DVM ****************************************


    //**************************** KIRA KEHADIRAN 2 DVM ****************************************
    if($hadirKelas['stud_year'] == "2 DVM" AND $hadirKelas['stud_class'] == "BPM"){
      $bpm2dvm++;
    }
    if($hadirKelas['stud_year'] == "2 DVM" AND $hadirKelas['stud_class'] == "BPP"){
      $bpp2dvm++;
    }
	  if($hadirKelas['stud_year'] == "2 DVM" AND $hadirKelas['stud_class'] == "IPD"){
      $ipd2dvm++;
    }
    if($hadirKelas['stud_year'] == "2 DVM" AND $hadirKelas['stud_class'] == "ISK"){
      $isk2dvm++;
    }
        //**************************** END KIRA KEHADIRAN 2 DVM ****************************************

  }

    while($totalKelas = mysqli_fetch_assoc($runKiraPel)){
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "BPM"){
      $tbpm1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "BPP"){
      $tbpp1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "BPR"){
      $tbpr1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "HBP"){
      $thbp1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "HSK"){
      $thsk1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "IPD"){
      $tipd1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "ISK"){
      $tisk1svm++;
    }
    if($totalKelas['stud_year'] == "1 SVM" AND $totalKelas['stud_class'] == "CTP"){
      $tctp1svm++;
    }


    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "BPM"){
      $tbpm2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "BPP"){
      $tbpp2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "BPR"){
      $tbpr2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "HBP"){
      $thbp2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "HSK"){
      $thsk2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "IPD"){
      $tipd2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "ISK"){
      $tisk2svm++;
    }
    if($totalKelas['stud_year'] == "2 SVM" AND $totalKelas['stud_class'] == "CTP"){
      $tctp2svm++;
    }


    if($totalKelas['stud_year'] == "1 DVM" AND $totalKelas['stud_class'] == "BPM"){
      $tbpm1dvm++;
    }
    if($totalKelas['stud_year'] == "1 DVM" AND $totalKelas['stud_class'] == "BPP"){
      $tbpp1dvm++;
    }
    if($totalKelas['stud_year'] == "1 DVM" AND $totalKelas['stud_class'] == "HBP"){
      $thbp1dvm++;
    }
    if($totalKelas['stud_year'] == "1 DVM" AND $totalKelas['stud_class'] == "HSK"){
      $thsk1dvm++;
    }
    if($totalKelas['stud_year'] == "1 DVM" AND $totalKelas['stud_class'] == "IPD"){
      $tipd1dvm++;
    }
    if($totalKelas['stud_year'] == "1 DVM" AND $totalKelas['stud_class'] == "ISK"){
      $tisk1dvm++;
    }


    if($totalKelas['stud_year'] == "2 DVM" AND $totalKelas['stud_class'] == "BPM"){
      $tbpm2dvm++;
    }
    if($totalKelas['stud_year'] == "2 DVM" AND $totalKelas['stud_class'] == "BPP"){
      $tbpp2dvm++;
    }
	  if($totalKelas['stud_year'] == "2 DVM" AND $totalKelas['stud_class'] == "IPD"){
      $tipd2dvm++;
    }
    if($totalKelas['stud_year'] == "2 DVM" AND $totalKelas['stud_class'] == "ISK"){
      $tisk2dvm++;
    }
  }

  $percent =  round((($jumHadir / $jum) * 100),2);

?>

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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $percent; ?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $percent; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumHadir;?> / <?php echo $jum;?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">under development</div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800">under development</div>
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
              <h6 class="m-0 font-weight-bold text-primary">Laporan e-Kehadiran KVDSAZI (<?php echo $dahUbah." - ".$masa ;?>)</h6>
            </div>
            <div class="card-body">

                            <div class="table-responsive">
                <?php
                  $kelas = array (
                          array("1 SVM","BPM",$bpm1svm,$tbpm1svm),
                          array("1 SVM","BPP",$bpp1svm,$tbpp1svm),
                          array("1 SVM","BPR",$bpr1svm,$tbpr1svm),
                          array("1 SVM","CTP",$ctp1svm,$tctp1svm),
                          array("1 SVM","HBP",$hbp1svm,$thbp1svm),
                          array("1 SVM","HSK",$hsk1svm,$thsk1svm),
                          array("1 SVM","IPD",$ipd1svm,$tipd1svm),
                          array("1 SVM","ISK",$isk1svm,$tisk1svm), 
                          array("2 SVM","BPM",$bpm2svm,$tbpm2svm),
                          array("2 SVM","BPP",$bpp2svm,$tbpp2svm),
                          array("2 SVM","BPR",$bpr2svm,$tbpr2svm),
                          array("2 SVM","CTP",$ctp2svm,$tctp2svm),
                          array("2 SVM","HBP",$hbp2svm,$thbp2svm),
                          array("2 SVM","HSK",$hsk2svm,$thsk2svm),
                          array("2 SVM","IPD",$ipd2svm,$tipd2svm),
                          array("2 SVM","ISK",$isk2svm,$tisk2svm), 
                          array("1 DVM","BPM",$bpm1dvm,$tbpm1dvm),
                          array("1 DVM","BPP",$bpp1dvm,$tbpp1dvm),
                          array("1 DVM","HBP",$hbp1dvm,$thbp1dvm),
                          array("1 DVM","HSK",$hsk1dvm,$thsk1dvm),
                          array("1 DVM","IPD",$ipd1dvm,$tipd1dvm),
                          array("1 DVM","ISK",$isk1dvm,$tisk1dvm), 
                          array("2 DVM","BPM",$bpm2dvm,$tbpm2dvm),
                          array("2 DVM","BPP",$bpp2dvm,$tbpp2dvm),
                          array("2 DVM","IPD",$ipd2dvm,$tipd2dvm),
                          array("2 DVM","ISK",$isk2dvm,$tisk2dvm)
                        );
                ?>
  



                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Bil</th>
                      <th>Tahun</th>
                      <th>Kelas</th>
                      <th>Kehadiran</th>
                    </tr>
                  </thead>
                  <tbody>                 
                    <?php 
                    $y=1;
                    for($x=0;$x<26;$x++){
                      ?>
                    <tr>
                      <td><?php echo $y++;?></td>
                      <td><?php echo $kelas[$x][0];?></td>
                      <td><?php echo $kelas[$x][1];?></td>
                      <td><?php echo $kelas[$x][2]."/".$kelas[$x][3]; ?></td>
                    </tr>                    
                  <?php  } ?>

                  </tbody>
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

