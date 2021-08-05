<?php


function paparanCetak(){
include 'conn.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paparan Pentadbir</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                      $data3 = mysqli_query($connection,"SELECT * FROM studInfo WHERE stud_year='2 DVM' AND stud_class='ipd'");
//                      $data3 = mysqli_query($connection,"SELECT  studinfo.*, hadirinfo.* from studinfo INNER JOIN hadirinfo INNER JOIN userinfo ON studinfo.stud_id = hadirinfo.stud_id WHERE studinfo.stud_year = userinfo.user_year AND studinfo.stud_class = userinfo.user_class ");

                      $no = 1;
                      while ($info3=mysqli_fetch_array($data3)) 
                      {

                      
                   ?>
                  
                    <tr>
                      <td><?php echo $info3['stud_year']; ?></td>
                      <td><?php echo $info3['stud_class']; ?></td>
                      <td><?php echo $info3['stud_name']; ?></td>

                      <?php 
                        $idPel = $info3['stud_id'];
                        //$tarikh = date("Y-m-d");

                        $data4 = mysqli_query($connection, "SELECT * FROM hadirInfo WHERE stud_id = '$idPel' AND hadir_date='2020-06-26' ");

                        if(mysqli_num_rows($data4) == 0){ ?>

                          <td align="center" colspan="3" class="bg-gradient-danger text-white">
                           TIADA DATA
                          </td>

                        <?php
                        } else {

                        while ($info4=mysqli_fetch_array($data4)) {
                      ?>
                      <td><?php echo $info4['hadir_date']; ?></td>
                      <td><?php echo $info4['hadir_time']; ?></td>
                      <td><?php echo $info4['hadir_suhu']; ?></td>
                    <?php } }?>

                    </tr>
                    
                  
                <?php 
                $no++;
              } ?></tbody>
                </table>
              </div>
</body>
</html>
<?php } ?>