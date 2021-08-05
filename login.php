<?php 
session_start();

  include "conn.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Log Masuk Sistem E Kehadiran</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="img/Logo_KVDSAZI.png">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login ke Sistem E Kehadiran</h1>
                  </div>
                  <?php if (isset($error)) {?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $error; ?>
                    </div>
                  <?php } ?>

                  <form class="user" action="login.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="Sila Masukkan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Sila Masukkan Kata Laluan">
                    </div>
                    <input type="submit" value="Login" name="submit" class="btn btn-primary btn-user btn-block"  data-toggle="modal" data-target="#myModal">
                    <hr>
                    <br><br><br><br><br><br>
                </div>
              </div></form>
              <?php 
                  if(isset($_POST['submit'])){
                      $uname = $_POST['username'];
                      $password = $_POST['password'];
                      
                      $query = mysqli_query($connection,"SELECT * from userinfo where user_name='$uname' AND user_pass='$password'");

                      //echo $uname;
                      if(mysqli_num_rows($query)==0)
                      {
                        $error = "Email atau Katalaluan adalah salah";
                      }
                      else
                      {
                        $row = mysqli_fetch_assoc($query);
                        $_SESSION['uname'] = $row['user_name'];
                        $_SESSION['level'] = $row['user_level'];
                        $_SESSION['tahun'] = $row['user_year'];
                        $_SESSION['kelas'] = $row['user_class'];

                        if ($row['user_level']=="1") 
                        {
                          header("Location: adminview.php");
                        }
                        else if($row['user_level']=="0") 
                        {
                          header("Location: teacherview.php");
                        }
                        else
                        {
                          $error = "Log masuk gagal";
                        }
                      }
                    }
               ?>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
