<?php 

include 'top.php'; 

if(($_SESSION['level'])!="0"){
  header("Location: login.php");
}

?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

<?php include 'sidebar.php'; ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php include 'topbar.php'; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Calendar -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pilih tarikh</h6>
            </div>
            <div class="card-body">
              <div id="kalendar"></div>

<table style="float: left; margin: 0 1em 1em 0"><tr><td>

  <!-- element that will contain the calendar -->
  <div id="calendar-container"></div>

  <!-- here we will display selection information -->
  <div id="calendar-info" style="text-align: center; margin-top: 0.3em"></div>

</td></tr></table>

    <script type="text/javascript">
      //CALENDAR SETUP
        //var DISABLED_DATES = {
         //   20151224: true,
           // 20151225: true,
         //   20151110: true
        //};

        var DATE_INFO = {

        //: { klass: "highlight", tooltip: "<div style='text-align: center'>%Y/%m/%d (%A)" + "<br />Hari Raya Qurban"}
        //,
        

        };

        function getDateInfo(date, wantsClassName) {
          var as_number = Calendar.dateToInt(date);

                    if (as_number >= 20170527 && as_number <= 20170527)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Awal Ramadhan</div>" // formatted by printDate
              };
                      if (as_number >= 20170901 && as_number <= 20170901)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Raya Qurban</div>" // formatted by printDate
              };
                      if (as_number >= 20190811 && as_number <= 20190811)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI RAYA QURBAN</div>" // formatted by printDate
              };
                      if (as_number >= 20170603 && as_number <= 20170603)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Keputeraan Seri Paduka Baginda Yang di-pertuan Agong</div>" // formatted by printDate
              };
                      if (as_number >= 20161029 && as_number <= 20161029)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Deepavali</div>" // formatted by printDate
              };
                      if (as_number >= 20161226 && as_number <= 20161226)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Perayaan hari Krismas</div>" // formatted by printDate
              };
                      if (as_number >= 20160831 && as_number <= 20160831)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Kebangsaan (Kemerdekaan)</div>" // formatted by printDate
              };
                      if (as_number >= 20160101 && as_number <= 20160101)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tahun Baru 2016</div>" // formatted by printDate
              };
                      if (as_number >= 20160606 && as_number <= 20160606)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Awal Ramadhan</div>" // formatted by printDate
              };
                      if (as_number >= 20170510 && as_number <= 20170510)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Wesak</div>" // formatted by printDate
              };
                      if (as_number >= 20180510 && as_number <= 20180511)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI KELEPASAN AM SEMPENA PILIHAN RAYA UMUM KE 14-TAHNIAH</div>" // formatted by printDate
              };
                      if (as_number >= 20170129 && as_number <= 20170129)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Tahun Baru Cina (Hari Kedua)</div>" // formatted by printDate
              };
                      if (as_number >= 20170922 && as_number <= 20170922)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Awal Muharam (Maal Hijrah)</div>" // formatted by printDate
              };
                      if (as_number >= 20200525 && as_number <= 20200525)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Raya Puasa (Hari Kedua)</div>" // formatted by printDate
              };
                      if (as_number >= 20200731 && as_number <= 20200731)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Raya Qurban</div>" // formatted by printDate
              };
                      if (as_number >= 20200820 && as_number <= 20200820)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Awal Muharam (Maal Hijrah)</div>" // formatted by printDate
              };
                      if (as_number >= 20200831 && as_number <= 20200831)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Kebangsaan</div>" // formatted by printDate
              };
                      if (as_number >= 20151225 && as_number <= 20151225)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Krismas</div>" // formatted by printDate
              };
                      if (as_number >= 20160208 && as_number <= 20160209)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tahun Baru Cina</div>" // formatted by printDate
              };
                      if (as_number >= 20160521 && as_number <= 20160521)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Wesak</div>" // formatted by printDate
              };
                      if (as_number >= 20160912 && as_number <= 20160912)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Raya Qurban</div>" // formatted by printDate
              };
                      if (as_number >= 20151202 && as_number <= 20151203)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Awal Muharam (Maal Hijrah)</div>" // formatted by printDate
              };
                      if (as_number >= 20161212 && as_number <= 20161212)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Maulidur Rasul</div>" // formatted by printDate
              };
                      if (as_number >= 20170101 && as_number <= 20170101)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Tahun Baru 2017</div>" // formatted by printDate
              };
                      if (as_number >= 20170625 && as_number <= 20170626)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Raya Puasa</div>" // formatted by printDate
              };
                      if (as_number >= 20170831 && as_number <= 20170831)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Kebangsaan</div>" // formatted by printDate
              };
                      if (as_number >= 20170916 && as_number <= 20170916)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Malaysia</div>" // formatted by printDate
              };
                      if (as_number >= 20171018 && as_number <= 20171018)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Deepavali</div>" // formatted by printDate
              };
                      if (as_number >= 20171201 && as_number <= 20171201)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Keputeraan Nabi Muhammad SAW (Maulidur Rasul)</div>" // formatted by printDate
              };
                      if (as_number >= 20171225 && as_number <= 20171225)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Krismas</div>" // formatted by printDate
              };
                      if (as_number >= 20190501 && as_number <= 20190501)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PEKERJA</div>" // formatted by printDate
              };
                      if (as_number >= 20190605 && as_number <= 20190606)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI RAYA PUASA</div>" // formatted by printDate
              };
                      if (as_number >= 20190909 && as_number <= 20190909)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEPUTERAAN SERI PADUKA BAGINDA YANG DI PERTUAN AGONG</div>" // formatted by printDate
              };
                      if (as_number >= 20191027 && as_number <= 20191027)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI DEEPAVALI</div>" // formatted by printDate
              };
                      if (as_number >= 20180101 && as_number <= 20180101)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />TAHUN BARU 2018</div>" // formatted by printDate
              };
                      if (as_number >= 20180509 && as_number <= 20180509)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI KELEPASAN AM TAMBAHAN SEMPENA HARI MENGUNDI UNTUK PILIHAN RAYA UMUM KE-14</div>" // formatted by printDate
              };
                      if (as_number >= 20190730 && as_number <= 20190730)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />cuti am tambahan bagi seluruh negara sempena Hari Pertabalan Yang di-Pertuan Agong ke-16</div>" // formatted by printDate
              };
                      if (as_number >= 20170424 && as_number <= 20170424)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PERTABALAN YANG DIPERTUAN AGONG</div>" // formatted by printDate
              };
                      if (as_number >= 20180216 && as_number <= 20180216)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI TAHUN BARU CINA HARI PERTAMA</div>" // formatted by printDate
              };
                      if (as_number >= 20180501 && as_number <= 20180501)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PEKERJA</div>" // formatted by printDate
              };
                      if (as_number >= 20180529 && as_number <= 20180529)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI WESAK</div>" // formatted by printDate
              };
                      if (as_number >= 20180615 && as_number <= 20180615)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI RAYA PUASA HARI PERTAMA</div>" // formatted by printDate
              };
                      if (as_number >= 20180616 && as_number <= 20180616)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI RAYA PUASA HARI KEDUA</div>" // formatted by printDate
              };
                      if (as_number >= 20180822 && as_number <= 20180822)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI RAYA QURBAN HARI PERTAMA</div>" // formatted by printDate
              };
                      if (as_number >= 20180831 && as_number <= 20180831)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEBANGSAAN</div>" // formatted by printDate
              };
                      if (as_number >= 20180909 && as_number <= 20180909)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEPUTERAAN SERI PADUKA BAGINDA YANG DI PERTUAN AGONG</div>" // formatted by printDate
              };
                      if (as_number >= 20160604 && as_number <= 20160604)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Keputeraan Seri Paduka Baginda Yang di-Pertuan Agong</div>" // formatted by printDate
              };
                      if (as_number >= 20160708 && as_number <= 20160708)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tambahan Hari Raya Aidil Fitri</div>" // formatted by printDate
              };
                      if (as_number >= 20200126 && as_number <= 20200126)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tahun Baru Cina (Hari Kedua)</div>" // formatted by printDate
              };
                      if (as_number >= 20200507 && as_number <= 20200507)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Wesak</div>" // formatted by printDate
              };
                      if (as_number >= 20200524 && as_number <= 20200524)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Raya Puasa</div>" // formatted by printDate
              };
                      if (as_number >= 20200606 && as_number <= 20200606)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Keputeraan Seri Paduka Baginda Yang di-Pertuan Agong</div>" // formatted by printDate
              };
                      if (as_number >= 20160706 && as_number <= 20160707)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Raya Aidil Fitri</div>" // formatted by printDate
              };
                      if (as_number >= 20200916 && as_number <= 20200916)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Malaysia</div>" // formatted by printDate
              };
                      if (as_number >= 20160916 && as_number <= 20160916)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Malaysia</div>" // formatted by printDate
              };
                      if (as_number >= 20160502 && as_number <= 20160502)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Pekerja (Buruh)</div>" // formatted by printDate
              };
                      if (as_number >= 20201225 && as_number <= 20201225)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Krismas</div>" // formatted by printDate
              };
                      if (as_number >= 20200123 && as_number <= 20200124)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tambahan Perayaan Tahun Baru Cina (KPM)</div>" // formatted by printDate
              };
                      if (as_number >= 20200521 && as_number <= 20200522)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tambahan Hari Raya Aidil Fitri (KPM)</div>" // formatted by printDate
              };
                      if (as_number >= 20201029 && as_number <= 20201029)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Keputeraan Nabi Muhammad S.A.W. (Maulidur Rasul)</div>" // formatted by printDate
              };
                      if (as_number >= 20201114 && as_number <= 20201114)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Deepavali</div>" // formatted by printDate
              };
                      if (as_number >= 20201113 && as_number <= 20201113)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tambahan Hari Deepavali (KPM)</div>" // formatted by printDate
              };
                      if (as_number >= 20201116 && as_number <= 20201116)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tambahan Hari Deepavali (KPM)</div>" // formatted by printDate
              };
                      if (as_number >= 20200127 && as_number <= 20200127)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI TERTUNDA PERAYAAN TAHUN BARU CINA</div>" // formatted by printDate
              };
                      if (as_number >= 20161003 && as_number <= 20161003)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI UMUM SEMPENA AWAL MUHARAM</div>" // formatted by printDate
              };
                      if (as_number >= 20180911 && as_number <= 20180911)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />AWAL MUHARAM (MAAL HIJRAH)</div>" // formatted by printDate
              };
                      if (as_number >= 20180916 && as_number <= 20180916)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI MALAYSIA</div>" // formatted by printDate
              };
                      if (as_number >= 20181106 && as_number <= 20181106)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI DEEPAVALI</div>" // formatted by printDate
              };
                      if (as_number >= 20181120 && as_number <= 20181120)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEPUTERAAN NABI MUHAMMAD SAW (MAULIDUR RASUL)</div>" // formatted by printDate
              };
                      if (as_number >= 20181225 && as_number <= 20181225)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KRISMAS</div>" // formatted by printDate
              };
                      if (as_number >= 20180910 && as_number <= 20180910)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEPUTERAAN SERI PADUKA BAGINDA YANG DI PERTUAN AGONG (GANTIAN)</div>" // formatted by printDate
              };
                      if (as_number >= 20170128 && as_number <= 20170128)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Tahun Baru Cina</div>" // formatted by printDate
              };
                      if (as_number >= 20170501 && as_number <= 20170501)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Pekerja</div>" // formatted by printDate
              };
                      if (as_number >= 20180917 && as_number <= 20180917)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI MALAYSIA (GANTIAN)</div>" // formatted by printDate
              };
                      if (as_number >= 20190205 && as_number <= 20190205)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />TAHUN BARU CINA</div>" // formatted by printDate
              };
                      if (as_number >= 20190206 && as_number <= 20190206)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />TAHUN BARU CINA (HARI KEDUA)</div>" // formatted by printDate
              };
                      if (as_number >= 20190902 && as_number <= 20190902)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />AWAL MUHARAM (MAAL HIJRAH) (GANTI)</div>" // formatted by printDate
              };
                      if (as_number >= 20190916 && as_number <= 20190916)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI MALAYSIA</div>" // formatted by printDate
              };
                      if (as_number >= 20191109 && as_number <= 20191109)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEPUTERAAN NABI MUHAMMAD SAW (MAULIDUR RASUL)</div>" // formatted by printDate
              };
                      if (as_number >= 20200125 && as_number <= 20200125)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tahun Baru Cina</div>" // formatted by printDate
              };
                      if (as_number >= 20170904 && as_number <= 20170904)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI UMUM SUKAN SEA</div>" // formatted by printDate
              };
                      if (as_number >= 20180217 && as_number <= 20180217)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI TAHUN BARU CINA HARI KEDUA</div>" // formatted by printDate
              };
                      if (as_number >= 20190519 && as_number <= 20190519)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI WESAK</div>" // formatted by printDate
              };
                      if (as_number >= 20190520 && as_number <= 20190520)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI WESAK (GANTIAN)</div>" // formatted by printDate
              };
                      if (as_number >= 20190812 && as_number <= 20190812)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI RAYA QURBAN (GANTI)</div>" // formatted by printDate
              };
                      if (as_number >= 20190831 && as_number <= 20190831)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KEBANGSAAN</div>" // formatted by printDate
              };
                      if (as_number >= 20190901 && as_number <= 20190901)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />AWAL MUHARAM (MAAL HIJRAH)</div>" // formatted by printDate
              };
                      if (as_number >= 20191028 && as_number <= 20191028)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI DEEPAVALI (GANTI)</div>" // formatted by printDate
              };
                      if (as_number >= 20191225 && as_number <= 20191225)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI KRISMAS</div>" // formatted by printDate
              };
                      if (as_number >= 20200501 && as_number <= 20200501)
                          return {
                klass   : "highlight",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Pekerja</div>" // formatted by printDate
              };
            if (as_number >= 20161014 && as_number <= 20161014)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI JADI YANG DI-PERTUA NEGERI MELAKA</div>" // formatted by printDate
              };
          if (as_number >= 20171013 && as_number <= 20171013)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Jadi YDP Negeri Melaka</div>" // formatted by printDate
              };
          if (as_number >= 20160415 && as_number <= 20160415)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PENGISYTIHARAN MELAKA SEBAGAI BANDARAYA BERSEJARAH</div>" // formatted by printDate
              };
          if (as_number >= 20170415 && as_number <= 20170415)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Hari Pengisytiharan Melaka Sebagai Bandaraya Bersejarah</div>" // formatted by printDate
              };
          if (as_number >= 20200101 && as_number <= 20200101)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Tahun Baru 2020</div>" // formatted by printDate
              };
          if (as_number >= 20180415 && as_number <= 20180415)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PENGISYTIHARAN MELAKA BANDARAYA BERSEJARAH</div>" // formatted by printDate
              };
          if (as_number >= 20180416 && as_number <= 20180416)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PENGISYTIHARAN MELAKA BANDARAYA BERSEJARAH (GANTIAN)</div>" // formatted by printDate
              };
          if (as_number >= 20180517 && as_number <= 20180517)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />AWAL RAMADHAN</div>" // formatted by printDate
              };
          if (as_number >= 20181012 && as_number <= 20181012)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI JADI YANG DIPERTUA NEGERI MELAKA</div>" // formatted by printDate
              };
          if (as_number >= 20190415 && as_number <= 20190415)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI PENGISYTIHARAN MELAKA SEBAGAI BANDARAYA BERSEJARAH</div>" // formatted by printDate
              };
          if (as_number >= 20190506 && as_number <= 20190506)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />AWAL RAMADHAN</div>" // formatted by printDate
              };
          if (as_number >= 20201009 && as_number <= 20201009)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Jadi Yang di-Pertua Negeri Melaka</div>" // formatted by printDate
              };
          if (as_number >= 20200415 && as_number <= 20200415)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Hari Perisytiharan Melaka Sebagai Bandaraya Bersejarah</div>" // formatted by printDate
              };
          if (as_number >= 20190101 && as_number <= 20190101)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />TAHUN BARU 2019</div>" // formatted by printDate
              };
          if (as_number >= 20191011 && as_number <= 20191011)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI JADI YANG DIPERTUA NEGERI MELAKA</div>" // formatted by printDate
              };
          if (as_number >= 20200424 && as_number <= 20200424)
                          return {
                klass   : "highlight2",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Awal Ramadan</div>" // formatted by printDate
              };
         if (as_number >= 20191025 && as_number <= 20191025)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERAYAAN HARI DEEPAVALI - CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM</div>" // formatted by printDate
              };
           if (as_number >= 20170627 && as_number <= 20170630)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI DIPERUNTUKKAN KPM SEMPENA HARI RAYA AIDIL FITRI</div>" // formatted by printDate
              };
           if (as_number >= 20170126 && as_number <= 20170131)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI DIPERUNTUKKAN KPM SEMPENA TAHUN BARU CINA</div>" // formatted by printDate
              };
           if (as_number >= 20190207 && as_number <= 20190208)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERAYAAN TAHUN BARU CINA - CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM</div>" // formatted by printDate
              };
           if (as_number >= 20190204 && as_number <= 20190204)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERAYAAN TAHUN BARU CINA - CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM</div>" // formatted by printDate
              };
           if (as_number >= 20160210 && as_number <= 20160212)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />PERAYAAN TAHUN BARU CINA</div>" // formatted by printDate
              };
           if (as_number >= 20161028 && as_number <= 20161101)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />PERAYAAN DEEPAVALI</div>" // formatted by printDate
              };
           if (as_number >= 20160704 && as_number <= 20160708)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />PERAYAAN AIDIL FITRI</div>" // formatted by printDate
              };
           if (as_number >= 20170623 && as_number <= 20170623)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI KHAS BERGANTI SEMPENA HARI RAYA AINDIL FITRI</div>" // formatted by printDate
              };
           if (as_number >= 20171016 && as_number <= 20171020)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI DIPERUNTUKKAN KPM SEMPENA HARI DEEPAVALI</div>" // formatted by printDate
              };
           if (as_number >= 20190610 && as_number <= 20190610)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERAYAAN HARI RAYA AIDIL FITRI - CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM</div>" // formatted by printDate
              };
           if (as_number >= 20191029 && as_number <= 20191029)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERAYAAN HARI DEEPAVALI - CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM</div>" // formatted by printDate
              };
           if (as_number >= 20200323 && as_number <= 20200331)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERINTAH KAWALAN PERGERAKAN WABAK COVID 19</div>" // formatted by printDate
              };
           if (as_number >= 20200513 && as_number <= 20200609)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERINTAH KAWALAN PERGERAKAN BERSYARAT WABAK COVID 19</div>" // formatted by printDate
              };
           if (as_number >= 20180509 && as_number <= 20180509)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />Cuti Peristiwa Khas Sempena PRU ke-14</div>" // formatted by printDate
              };
           if (as_number >= 20200401 && as_number <= 20200414)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br /></div>" // formatted by printDate
              };
           if (as_number >= 20200415 && as_number <= 20200428)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERINTAH KAWALAN PERGERAKAN COVID 19</div>" // formatted by printDate
              };
           if (as_number >= 20200429 && as_number <= 20200512)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERINTAH KAWALAN PERGERAKAN WABAK COVID 19</div>" // formatted by printDate
              };
           if (as_number >= 20200610 && as_number <= 20200623)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />CUTI PERINTAH KAWALAN PERGERAKAN PEMULIHAN WABAK COVID 19</div>" // formatted by printDate
              };
           if (as_number >= 20180215 && as_number <= 20180219)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />TAHUN BARU CINA (CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM)</div>" // formatted by printDate
              };
           if (as_number >= 20181105 && as_number <= 20181107)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />HARI DEEPAVALI (CUTI PERAYAAN YANG DIPERUNTUKKAN OLEH KPM)</div>" // formatted by printDate
              };
           if (as_number >= 20190102 && as_number <= 20190104)
                          return {
                klass   : "highlight3",
                tooltip : "<div style='text-align: center'>%d/%m/%Y (%A)" +
                        "<br />TAKWIM PENGAJIAN AKADEMIK KV BAGI SESI1/2019 BERMULA PADA 07/01/2019</div>" // formatted by printDate
              };
                  
          return DATE_INFO[as_number];
        };

        var LEFT_CAL = Calendar.setup({
            cont: "kalendar",

            fdow: 1,

            min : 20151201,
            max : 20200722,

            dateInfo : getDateInfo, // pass our getDateInfo function

            //dari DISABLED_DATES
          //  disabled : function(date) {
           //     date = Calendar.dateToInt(date);
          //      return date in DISABLED_DATES;
          //  },

         
        });

        LEFT_CAL.selection.set(20200722);
        </script>



            </div>
          </div>
          <!-- End Calendar -->

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

                  $thn = $_SESSION['tahun'];
                  $cls = $_SESSION['kelas'];
                      $data3 = mysqli_query($connection,"SELECT * FROM studInfo WHERE stud_year='$thn' AND stud_class='$cls'");
//                      $data3 = mysqli_query($connection,"SELECT  studinfo.*, hadirinfo.* from studinfo INNER JOIN hadirinfo INNER JOIN userinfo ON studinfo.stud_id = hadirinfo.stud_id WHERE studinfo.stud_year = userinfo.user_year AND studinfo.stud_class = userinfo.user_class ");

                      $no = 1;
                      while ($info3=mysqli_fetch_array($data3)) 
                      {

                      
                   ?>
                  
                    <tr>
                      <td align="center"><?php echo $no; ?></td>
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
                  <a href="report.php?thn=<?php echo $thn ;?>&kls=<?php echo $cls ;?>&tarikh=2020-06-26" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-print"></i>
                    </span>
                    <span class="text">Cetak</span>
                  </a>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include 'footer.php'; ?>
</body>

</html>
