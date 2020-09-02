<!--Counter Inbox-->
<?php
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $query2=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
    $jum_comment=$query2->num_rows();
    $jum_pesan=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ponpes Ash-Sholohah | Data Peljaran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php
    $this->load->view('superadmin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php 
   $this->load->view('superadmin/v_sidebar');
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelas
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   
      <div class="row" >
        <div class="col col-md-12" >
          <div class="box">
            <div class="box-header">
              <h3>Data Kategori Kelas</h3>
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModalkategori"><span class="fa fa-plus"></span> Tambah Kategori Kelas</a>
            </div>
                  <div class="box-body">
              <table  class="table" style="font-size:12px;">
                <thead>
                <tr>
                    <th>Kelas</th>
                    
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $no=0;
                    foreach ($kategori->result_array() as $i) :
                       $no++;
                       $kategori_id=$i['kategori_id'];
                       $kategori_kelas=$i['kategori_kelas'];
                    ?>
                <tr>
                  <td><?php echo $kategori_kelas;?></td>
                  
                  <td style="text-align:right;">
                        <a class="btn btn-danger" data-toggle="modal" data-target="#ModalHapus<?php echo $kategori_id;?>"><span class="fa fa-trash"> Hapus</span></a>
                  </td>
                </tr>
        <?php endforeach;?>
                </tbody>
              </table>
            </div>
            
          </div>
        </div>  
      </div>

      <div class="row">
        <div class="col-md-12">
          

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Tambah Kelas</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>Nama Kelas</th>
                    <th>Kategori Kelas</th>
          					<th>Wali Kelas</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $id=$i['kelas_id'];
          					   $kelas_nama=$i['kelas_nama'];
                       $kelas_kategori=$i['kategori_kelas'];
                       $kelas_wali=$i['pengguna_nama'];
                    ?>
                <tr>
        				  <td><?php echo $kelas_nama;?></td>
                  <td><?php echo $kelas_kategori;?></td>
                  <td><?php echo $kelas_wali;?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
       
      </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  $this->load->view('superadmin/v_footer')
 ?>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- modal Tambah Kategori Kelas -->
    <div class="modal fade" id="myModalkategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Kategori Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/kelas/simpan_kategori_kelas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori Kelas</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkelas-kategori" class="form-control" id="inputUserName" placeholder="Kelas" required autocomplete="off">
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <!--Modal tambah kelas-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/kelas/simpan_kelas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Nama Kelas</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkelas" class="form-control" id="inputUserName" placeholder="Kelas" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori Kelas</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="xkelas-kategori" style="width: 100%;" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              $no=0;
                                              foreach ($kategori->result_array() as $a) :
                                                 $no++;
                                                           $id=$a['kategori_id'];
                                                           $kategori_kelas=$a['kategori_kelas'];

                                                        ?>
                                                    <option value="<?php echo $id;?>"><?php echo $kategori_kelas;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Wali Kelas</label>
                                        <div class="col-sm-7">

                                          <select class="form-control" name="xidgurumapel" style="width: 100%;" required>
                                                    <option value="">-Pilih-</option>
                                              <?php
                                              $no=0;
                                              foreach ($gru->result_array() as $a) :
                                                 $no++;
                                                           $gru_id=$a['pengguna_id'];
                                                           $gru_nama=$a['pengguna_nama'];

                                                        ?>
                                                    <option value="<?php echo $gru_id;?>"><?php echo $gru_nama;?></option>
                                              <?php endforeach;?>
                                          </select>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

  <!--Modal update kelas-->
  <?php foreach ($data->result_array() as $i) :
                       $id=$i['kelas_id'];
                       $kelas_nama=$i['kelas_nama'];
                       // $mapel_guru_id=$i['mapel_guru_id'];
                       $kelas_wali=$i['pengguna_nama'];
                  ?>

        <div class="modal fade" id="ModalEdit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/kelas/update_kelas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkelas" value="<?php echo $kelas_nama;?>" class="form-control" id="inputUserName"  required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label for="inputUserName" class="col-sm-4 control-label">Wali Kelas</label>
                                      <div class="col-sm-7">

                                        <select class="form-control" name="xidwalikelas" style="width: 100%;" required>
                                          <option value=""><?php echo $kelas_wali; ?></option>
                                          <?php
                                          $no=0;
                                          foreach ($gru->result_array() as $a) :
                                           $no++;
                                         $gru_id=$a['pengguna_id'];
                                         $gru_nama=$a['pengguna_nama'];

                                         ?>
                                         <option value="<?php echo $gru_id;?>"><?php echo $gru_nama;?></option>
                                       <?php endforeach;?>
                                     </select>
                                   </div>
                                 </div>

                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
	<!--Modal Edit Album-->

	<?php foreach ($data->result_array() as $i) :
                       $id=$i['kelas_id'];
                       $kelas_nama=$i['kelas_nama'];
                       $kelas_wali=$i['pengguna_nama'];
            ?>
	<!--Modal Hapus kelas-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Guru</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/kelas/hapus_kelas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus kelas <b><?php echo $kelas_nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>

  <?php foreach ($kategori->result_array() as $i) :
                       $kategori_id=$i['kategori_id'];
                       $kategori_kelas=$i['kategori_kelas'];
                       
            ?>
  <!--Modal Hapus kategori kelas-->
        <div class="modal fade" id="ModalHapus<?php echo $kategori_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Guru</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'superadmin/kelas/hapus_kategori_kelas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                     <input type="hidden" name="kode" value="<?php echo $kategori_id;?>"/>
                            <p>Apakah Anda yakin mau menghapus kelas <b><?php echo $kategori_kelas;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>





<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                Swal.fire({
                        icon: 'warning',
                        title: 'Gagal Menmbah Data',
                        text: 'Wali Kelas Telah Terdata',
                      });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
                  <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Berhasil Menmbah Data',
                        text: 'Kelas Berhasil Ditambah',
                      });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus-kelas'):?>
           <script type="text/javascript">
                Swal.fire({
                        icon: 'success',
                        title: 'Data Terhapus',
                        text: 'Data Kelas Telah Terhapus',
                      });
        </script>
  
    <?php else:?>

    <?php endif;?>
</body>
</html>
