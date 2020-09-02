<!-- Tahun Ajaran -->
<?php
    $query=$this->db->query("SELECT * FROM tbl_thn_ajaran ORDER BY thn_id limit 1");
    $tahun=$query->row();
?>
<?php 
error_reporting(0);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ponpes Ash-Sholihah | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
 <style type="text/css">
    .content{
     min-height:100px;
     padding-top: 0px;
  }
  .panel-default1{
    min-height: 150px;
  }
  #form7{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
       font-weight: bold; 
  }
 </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!--Header-->
  <?php
    $this->load->view('siswa/v_header');
  ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php 
    $this->load->view('siswa/v_sidebar')
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rapor
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rapor</li>
      </ol>
    </section>
    <br>
    <?php 
$id=$data->siswa_id;
     ?>
    <!-- Main content -->
       <section class="content">
     <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
      <div class="row ">
        <div class="content">
  <div class="panel panel-default">
    <div class="box">
      <div class="box-body">
        <div class="box-body">
          <?php 
            $semester=$tahun->thn_semester;
            $id_semester=$tahun->thn_id;
            $tahun1=$tahun->thn_awal;
            $tahun2=$tahun->thn_akhir;
            $kode=$data->siswa_id;
            $nama=$data->siswa_nama;
            $nis=$data->siswa_nis;
            $kelas=$data->kelas_nama;
           ?>
          
          <div class="col col-md-6">
            <div class="form-group hidden" align="Left">
              <label for="inputUserName" class="col-md-3 control-label" style="text-align: left;">Id Siswa</label>
              <div class="col-md-5">
                  <input type="text" name="id_siswa" class="form-control" id="inputUserName"  value="<?php echo $kode; ?>" placeholder="Nama Lengkap" readonly>
              </div>
          </div>
          <div class="form-group hidden" align="Left">
              <label for="inputUserName" class="col-md-3 control-label" style="text-align: left;">Id semseter</label>
              <div class="col-md-5">
                  <input type="text" name="id_semester" class="form-control" id="inputUserName"  value="<?php echo $id_semester; ?>" placeholder="Nama Lengkap" readonly>
              </div>
          </div>
          <div class="form-group" align="Left">
              <label for="inputUserName" class="col-md-3 control-label" style="text-align: left;">NIS</label>
              <div class="col-md-5">
                  <input type="text" name="nis" class="form-control" id="inputUserName" value="<?php echo $nis; ?>" placeholder="Nama Lengkap" readonly>
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-md-3 control-label"  style="text-align: left;">Nama</label>
              <div class="col-md-5">
              
                  <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $nama; ?>" placeholder="Nama Lengkap" readonly>
              </div>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="form-group">
              <label for="inputUserName" class="col-md-5 control-label">Kelas</label>
              <div class="col-md-5">
              <input type="hidden" name="kode" value=""/>
                  <input type="text" name="kelas" class="form-control" id="inputUserName" value="<?php echo $kelas; ?>" placeholder="Nama Lengkap" readonly>
              </div>
          </div>
          <div class="form-group">
              <label for="inputUserName" class="col-md-5 control-label">Semester</label>
              <div class="col-md-5">
              <input type="hidden" name="kode" value=""/>
                  <input type="text" name="semester" class="form-control" id="inputUserName" value="<?php if($semester=='1'): ?> Ganjil <?php elseif($semester=='2'): ?> Genap <?php endif; ?> <?php echo $tahun1." / ".$tahun2; ?>" placeholder="Nama Lengkap" readonly>
              </div>
          </div>
        </div>  
   
        </div> 
      </div>
    </div>
    </div>
  </div>
  </div>
  <!-- tabel nilai mapel -->
  <div class="row ">
    <div class="content">
  <div class="panel panel-default">
    <div class="box">
      <div class="box-body">
          <h4 >Nilai Mata Pelajaran</h4>

   <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
                   
                    <th rowspan="2">Kode Mapel</th>
                    <th rowspan="2">Nama Mapel</th>
                    <th colspan="4" style="text-align: center;">Nilai</th>
                </tr>
                <tr>
              
                  <th>Nilai1</th>
                  <th>Nilai2</th>
                  <th>Nilai Akhir</th>
                </tr>
                </thead>
                <tbody>
       <?php 
foreach ($nilai->result_array() as $i):
  $kode=$i['mapel_kode'];
  $nama=$i['mapel_nama'];
  $nilai1=$i['nilai1'];
  $nilai2=$i['nilai2'];
  $nilaiakhir=$i['nilai_akhir'];

 ?>
                <tr>
                  <td><?php echo $kode; ?></td>
                  <td><?php echo $nama; ?></td>
                  <td><?php echo $nilai1; ?></td>
                  <td><?php echo $nilai2; ?></td>
                  <td><?php echo $nilaiakhir; ?></td>
                
                
                </tr>
        <?php endforeach; ?>
                </tbody>
              </table> 

        </div> 
      </div>
    </div>
    </div>
  </div>
  <!-- tabel kehadiran siswa -->
  <div class="row">
  <div class="col col-md-12">
    <div class="col col-md-6">
      <div class="row content" style="padding:0;">
  <div class="panel panel-default">
    <div class="box">
      <div class="box-body">
        <h4>Kehadiran</h4>
         <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
                    <th rowspan="2">Alpha</th>
                    <th rowspan="2">Izin</th>
                </tr>
                </thead>
                <tbody>
                  
                <tr>
                  <td><?php echo $alpha ?></td>
                  <td><?php echo $izin ?></td>
                </tr>
       
                </tbody>
              </table>  
      </div>
    </div>
  </div>
</div>
    </div>
    <!-- Kenaikan kelas -->
    <?php 
  $query=$this->db->query("SELECT * FROM tbl_kelas ORDER BY kelas_id desc");
    $kelas1=$query;
   ?>
    <div class="col col-md-6">
      <div class="row content" style="padding:0;">
  <div class="panel panel-default">
    <div class="box">
      <div class="box-body" style="padding-bottom: 35px;">
        <h4>Keterangan Kenaikkan Kelas</h4>
        <div class="col col-md-6">
          <div class="form-group">
              <label for="inputUserName" class="col-md-6 control-label">Setatus Kenaikan</label>
              <div class="col-md-6" style="margin-top: 5px;">
              <select class="mdb-select md-form" name="status_kenaikan">
                <?php 
                $status=$rapor->rapor_status;
                 ?>
                <option value="" disabled selected><?php if ($status=='1'):?>
                  Naik Kelas
                  <?php elseif ($status=='0'):?>
                    Tidak Naik Kelas
                  <?php endif; ?>
                </option>
              </select>
              </div>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="form-group">
              <label for="inputUserName" class="col-md-6 control-label">Kelas</label>
              <div class="col-md-6" style="margin-top: 5px;">
              <select class="mdb-select md-form" name="kelas">
                  <?php 
                  $kelas=$rapor->kelas_nama;
                   ?>
                <option disabled selected><?php echo $kelas; ?></option>
               
             
              
              </select>
              </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
  </div>
  <!-- Catatan Wali -->
  <div class="row">
  <div class="col col-md-12">
<div class="row content" style="padding:0;">
  <div class="panel panel-default">
    <div class="box">
      <div class="box-body">
        <h4>Catatan Wali Kelas</h4>
        <div class="md-form">
          <?php 
            $catatan=$rapor->rapor_catatan;
           ?>
          <textarea id="form7" name="catatan" class="md-textarea form-control" rows="4" readonly ><?php echo $catatan; ?></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php 
$id=$data->siswa_id;
 ?>

  </form>
</section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

<?php 
  $this->load->view('siswa/v_footer')
 ?>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>


</body>
</html>
