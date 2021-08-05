<?php
// INIT MPDF

include 'conn.php';


require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

// YOU CAN USE THE LANDSCAPE ORIENTATION AS WELL
// $mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

// OPTIONAL META DATA
$mpdf->SetTitle('Document Title');
$mpdf->SetAuthor('John Doe');
$mpdf->SetCreator('Creator');
$mpdf->SetSubject('Demo');
$mpdf->SetKeywords('Keyword 1, Keyword 2');

$pagecount = $mpdf->setSourceFile("fpdf/formatReport.pdf");
$tpl = $mpdf->importPage($pagecount);
$mpdf->useTemplate($tpl);

// SET THE PASSWORD & PERMISSIONS IF YOU WANT
// https://mpdf.github.io/reference/mpdf-functions/setprotection.html
//$mpdf->SetProtection(array(), "userpass", "ownerpass");


    $kls = $_GET['kls'];
    $thn = $_GET['thn'];
	$tarikh = $_GET['tarikh'];
	$ud = explode('-',$tarikh);
	$dahUbah = $ud[2]."-".$ud[1]."-".$ud[0];

// THE HTML
$html = '<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body>

            <div class="table-responsive" >
			<br><br><br><br><br>
            
			TARIKH : '.$dahUbah.' <BR>
			KELAS : '.$thn.' '.$kls.'<BR>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:8.5vw;">
                  <thead>
                    <tr>
                      <th align="center">Bil</th>
                      <th>Nama</th>
                      <th align="center">Masa</th>
                      <th align="center">Suhu</th>
                    </tr>
                  </thead>
                  <tbody>';




    $data3 = mysqli_query($connection,"SELECT * FROM studinfo WHERE stud_year='$thn' AND stud_class='$kls'");

    $no = 1;
    while ($info3=mysqli_fetch_array($data3)) 
    {
      if( ($tarikh > $info3['stud_disable']) && $info3['stud_status'] == '1' ){
                          continue;
                        }
                
        $html .= '<tr>
            <td align="center">'.$no.'</td>
            <td>'.$info3['stud_name'].'</td>';

       
          $idPel = $info3['stud_id'];
          $data4 = mysqli_query($connection, "SELECT * FROM hadirinfo WHERE stud_id = '$idPel' AND hadir_date='$tarikh' ");

           if(mysqli_num_rows($data4) == 0){ 

                $html .= '<td align="center" colspan="2" class="bg-gradient-danger text-white">
                           TIADA DATA
                          </td>';

                        
            } else {

                  while ($info4=mysqli_fetch_array($data4)) {
                      
                      $html .= '<td align="center">'.$info4['hadir_time'].'</td>
                      <td align="center">'.$info4['hadir_suhu'].'</td>';
                     } 
                   }

                    $html .= '</tr>';
                    
                  
               
                $no++;
    } 

$html .= '  </tbody>
                </table>
              </div>
</body>
</html>';

// OPTIONALLY, JUST GRAB FROM AN ENTIRE HTML FILE
// $html = file_get_contents('file.html');

// WRITE HTML
$mpdf->WriteHTML($html);

// OUTPUT, SHOW IN BROWSER BY DEFAULT
$mpdf->Output();
// OR FORCE DOWNLOAD
// $mpdf->Output('file.pdf');
?>