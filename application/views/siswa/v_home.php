<!--Counter Inbox-->

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

        </head>
        <body class="hold-transition skin-blue sidebar-mini">
          <div class="wrapper">

            <!--Header-->
            <?php
            $this->load->view('siswa/v_header');
            ?>

            <!-- Left side column. contains the logo and sidebar -->
            <?php 
            $this->load->view('siswa/v_sidebar');
            ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">

                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active">Profil</li>
                </ol>

              </section>

              <?php
              $id_santri=$this->session->userdata('idsantri');
              $q=$this->db->query("SELECT * FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id JOIN tbl_pengguna on kelas_wali_id=pengguna_id where siswa_id='$id_santri'");
              $c=$q->row_array();
          ?>

              <!-- Main content -->
              <section class="content">
                <!-- Info boxes -->
                <div class="row">
                  <h1 style="margin-left:10px; font-weight: bold;">Assalamu'alaikum!</h1>
                  <h2 style="text-align: center;">Selamat Datang <b><?php echo $c['siswa_nama'];?></b> di Siakad Pondok Pesantren Ash-Sholihah</h2>
                  <hr>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-md-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h2 class="box-title">Data Diri</h2>

                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="row">
                          <div class="col-md-12">

                            <div class="col-md-12">
                            <div class="col-md-4">
                          <img src="<?php echo base_url().'assets/images/foto_santri/'.$c['siswa_photo'];?>" class="img-user" alt="Foto Diri" width="250px">
                        </div>
                            <div class="col-md-8">
                             <div class="panel panel-default">


                              <div class="panel-body">
                                <form class="form-horizontal" style="" >


                                  <div class="form-group">
                                    <label for="inputUserName" class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-7">
                                      <input type="hidden"  name="kode" value="<?php echo $c['siswa_id'];?>"/>
                                      <input type="text"  class="form-control" id="inputUserName" value="<?php echo $c['siswa_nama'];?>" disabled>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>
                                    <div class="col-sm-7">
                                      <input type="email"  class="form-control" value="<?php echo $c['siswa_nis'];?>"  disabled>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputUserName" class="col-sm-2 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-7">
                                      <?php if($c['siswa_jenkel']=='L'):?>
                                       <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="L"  checked disabled="">
                                        <label for="inlineRadio1"> Laki-Laki </label>
                                      </div>
                                      <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="P" disabled>
                                        <label for="inlineRadio2"> Perempuan </label>
                                      </div>
                                    <?php else:?>
                                      <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="L" >
                                        <label for="inlineRadio1"> Laki-Laki </label>
                                      </div>
                                      <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="P"  checked disabled="">
                                        <label for="inlineRadio2"> Perempuan </label>
                                      </div>
                                    <?php endif;?>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputUserName" class="col-sm-2 control-label">Kelas</label>
                                  <div class="col-sm-7">
                                    <input type="text" name="xusername" class="form-control" value="<?php echo $c['kelas_nama'];?>" id="inputUserName" disabled>
                                  </div>
                                </div>
                                
                              </form>
                            </div>

                          
                        </div>
                        
                        </div>
                        <!-- /.chart-responsive -->
                      </div>
                      <!-- /.col -->

                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- ./box-body -->

                  <!-- /.box-footer -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
             
            <!-- /.col -->
</div>
            
          <!-- /.row -->
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

    <script>

      var lineChartData = {
        labels : <?php echo json_encode($bulan);?>,
        datasets : [

        {
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(152,235,239,1)",
          data : <?php echo json_encode($value);?>
        }

        ]

      }

      var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

      var canvas = new Chart(myLine).Line(lineChartData, {
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.005)",
        scaleGridLineWidth : 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        bezierCurve : true,
        bezierCurveTension : 0.4,
        pointDot : true,
        pointDotRadius : 4,
        pointDotStrokeWidth : 1,
        pointHitDetectionRadius : 2,
        datasetStroke : true,
        tooltipCornerRadius: 2,
        datasetStrokeWidth : 2,
        datasetFill : true,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true
      });

    </script>

  </body>
  </html>
