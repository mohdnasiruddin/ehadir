<?php

	date_default_timezone_set("Asia/Kuala_Lumpur");

	$namahost = "localhost";
	$pengguna_mysql = "root";
	$katalaluan_mysql = "";
	$dbname = "ehadir";

	$connection = mysqli_connect($namahost,$pengguna_mysql,$katalaluan_mysql) or die("Maaf pangkalan data tidak dapat disambung");
	mysqli_select_db($connection,$dbname) or die("Tidak dapat pilih pangkalan data");


?>