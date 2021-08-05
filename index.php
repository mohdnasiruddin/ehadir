<?php
  include('conn.php');
  


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem e-kehadiran KVDSAZI</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<?php
  if(empty($_POST['noic']) || (empty($_POST['suhu']))){

?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <center>
                  <br><br>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sistem e-Kehadiran KVDSAZI</h1>
                  </div>
                <img src="img/Logo_KVDSAZI.png" style="width: 70%; height: 50%; margin: auto;">
                </center>
              </div>
              <div class="col-lg-6">
			  <div class="p-5">
			  <?php 
			  //weekend sistem cuti
			  if (date("D")=="Sat" OR date("D")=="Sun"){?>
			  
			  <div class="alert alert-info" role="alert">
                        Sistem ditutup kerana hujung minggu
                    </div>
				  
				  <?php
			  } else {?>
                
                  <br><br>
                  <form name="hantarSuhu" method="POST" class="user">
                    <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sistem e-Kehadiran KVDSAZI</h1>
                  </div>
                    <div class="form-group">
                      <input type="text" name="noic" class="form-control form-control-user" id="no_kp" placeholder="Nombor Kad Pengenalan tanpa - dan jarak" maxlength="12" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="suhu" class="form-control form-control-user" id="suhuBadan" placeholder="Suhu Badan" required>
                    </div>
                    <div class="form-group">
                      <select data-placeholder="Mod Kenderaan ke Kolej" class="form-control" id="suhuBadan" name="mod_kehadiran" required>
                        <option value="Asrama">Asrama</option>
                        <option value="Dihantar oleh penjaga">Dihantar oleh penjaga</option>
                        <option value="Memandu kereta sendiri">Memandu kereta sendiri</option>
                        <option value="Menunggang motosikal sendiri">Menunggang motosikal sendiri</option>
                        <option value="Menumpang kereta kawan">Menumpang kereta kawan</option>
                        <option value="Menumpang motosikal kawan">Menumpang motosikal kawan</option>
                        <option value="Kenderaan awam teksi/van sekolah/kereta sewa">Kenderaan awam teksi/van sekolah/kereta sewa</option>
                        <option value="Menaiki basikal">Menaiki basikal</option>
                      </select>
                    </div>
                    <input type="submit" value="Hantar" name="hantar" class="btn btn-primary btn-user btn-block"  data-toggle="modal" data-target="#myModal">
                    
                    
                  </form>
                  <br><br><br><br><br>
                
			  <?php } ?>
			  </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php } else { 

  $ic = $_POST['noic'];
  $suhu = $_POST['suhu'];
  $modDtg = $_POST['mod_kehadiran'];


    $cariPelajar = "SELECT * FROM studinfo WHERE stud_ic = '$ic' ";
    $result = mysqli_query($connection,$cariPelajar) or die(mysqli_error());
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 0)
      {
        //echo "<script>alert('Maaf.. Data anda tiada dalam sistem.');
        //window.location='index.php'</script>";
        $warningMsg = "Maaf. No Kad Pengenalan yang dimasukkan tiada dalam sistem. Sila masukkan data semula.";
      }
    else
      {
        $idPel = $row['stud_ic'];
        $namaPel = $row['stud_name'];
        $tarikh = date("Y-m-d");
        $masa = date("H:i:s");

        if(date("H") < 13){  //setting masa untuk login. selepas jam 1300, x bleh login

			if(($suhu < 35) OR ($suhu > 37.5)){
				$suhuMsg = "Suhu anda rendah / lebih daripada suhu normal. Sila masuk semula data anda";
			}else{
							  $cariDupPelajar = "SELECT * FROM hadirinfo WHERE stud_ic = '$idPel' AND hadir_date ='$tarikh' ";
							  $result2 = mysqli_query($connection,$cariDupPelajar) or die(mysqli_error());

							  if(mysqli_num_rows($result2) == 0){
								$simpanSuhu = "INSERT into hadirinfo ( hadir_mode, hadir_suhu, stud_ic) values ('$modDtg','$suhu','$idPel')";      
							  } else {
								$simpanSuhu = "UPDATE hadirinfo SET hadir_suhu = '$suhu', hadir_mode ='$modDtg', hadir_time='$masa' WHERE stud_ic='$idPel' AND hadir_date='$tarikh'";
							  }      
							  
							  $query = mysqli_query($connection,$simpanSuhu);
							  if($query)
							  {
								$successMsg = "Terima Kasih <b>$namaPel</b>. Anda boleh bergerak masuk ke KVDSAZI";
							  }
			}
        }else{
            $sengalMsg = "Waktu sekarang sudah melebihi jam 10 pagi. Anda tidak dibenarkan untuk key in data. Sila rujuk pada penyelaras.";
        }
      }


?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <center>
                  <br><br>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Sistem e-Kehadiran KVDSAZI</h1>
                  </div>
                <img src="img/Logo_KVDSAZI.png" style="width: 70%; height: 50%; margin: auto;">
                </center>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <br><br>
                  <?php if (isset($successMsg)) {?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $successMsg; ?>
                    </div>
                    <?php
                    }

                    if(isset($sengalMsg)){
                    ?>

                    <div class="alert alert-warning" role="alert">
                        <?php echo $sengalMsg; ?>
                    </div>
                    <?php
                    }

                    if(isset($warningMsg)){
                    ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo $warningMsg; ?>
                    </div>
                    <?php
                    }
					
                    if(isset($suhuMsg)){
                    ?>
                      <div class="alert alert-danger" role="alert">
                        <?php echo $suhuMsg; ?>
                    </div>
                    <?php
                    }
                    ?>


                  <br><br>
                      <center><a class="small" href="index.php">Kembali ke halaman utama</a></center>
                  <br><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


<?php }?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>
