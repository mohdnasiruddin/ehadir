<?php 
session_start();
require_once __DIR__ . '/vendor/autoload.php';
    include 'conn.php'; 

$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pentadbir</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>




  <!-- calendar script -->
<link rel="stylesheet" href="js/jscal/src/css/jscal2.css" media="all" />
<link rel="stylesheet" href="js/jscal/src/css/steel/steel.css" media="all" />
<link rel="stylesheet" href="js/jscal/src/css/border-radius.css" media="all" />

<script src="js/jscal/src/js/jscal2.js"></script>
<script src="js/jscal/src/js/lang/en.js"></script>

<style type="text/css">
  body {
    background-color: #ffe;
  }
  .highlight { color: #f00 !important; font-weight: bold }
  .highlight2 { color: #090 !important; font-weight: bold }
  .highlight3 { color: #5900b3 !important; font-weight: bold }
  .birthday.DynarchCalendar-day-selected { background: #89f; font-weight: bold }
</style>
    <!-- end calendar script -->
</head>