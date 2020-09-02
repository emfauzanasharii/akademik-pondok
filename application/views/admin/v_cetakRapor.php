<!-- Tahun Ajaran -->
<?php
    $query=$this->db->query("SELECT * FROM tbl_thn_ajaran ORDER BY thn_id limit 1");
    $tahun=$query->row();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cek Pendaftaran</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
      <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
 

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
<link rel="stylesheet" type="text/css" href="<?php  echo base_url().'assets/dist/css/stylePdf.css' ?>">
    <style type="text/css">
        #foto-cop{
            width: 100px;
            height: 100px; 
         
        }
        #text-cop{
        float: right;
        clear: both;
        text-align: center

        }
        #cop{
            width: 100px;
            height: 100px;
        }
        #tabel{
            border: solid;
            margin-top: 10px;
            align-items: center;
        }
        #tblststus{
            border: solid;
            margin-top: 30px;
            align-items: center;
            margin: 20 auto;
        }
        .td1,.td2{
            font-size: 16px;
            font-family: serif;
            padding:5px;
        }
        #tabelnilai {
             font-size: 16px;
             text-align: center;
             margin-bottom: 10px;
             margin-top: -10px;
        }
        #tabelkehadiran{
             font-size: 16px;
             text-align: center;
             margin-top: -10px;
             margin-bottom: 10px;
        }
        .catatan{
            border: solid;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-top: -15px;
            margin-top: -30px;

        }
        #status{
           margin-top: -10px;
            border: solid;
            padding: 10px;
            margin-bottom: 10px;
            text-align: left;
        }
  

    </style>
</head>

<body>
    
     

 <div class="container">
   <div class="row">
    <div class="col col-md-1" >
        <div class="row" id="foto-cop">
            <img id="cop" src="theme/images/logo.jpg">
            <!--  <img id="cop" src="<?php echo base_url().'theme/images/logo.jpg' ?>"> -->
        </div>
        
    </div>
    <div class="col col-md-8" id="text-cop">
       
    <h3>Hasil Belajar Santri Pondok Pesantren Ash-Sholihah</h3>
    <h4 style="padding-top:-20px;">Jonggrangan, Sumberadi, Mlati, Sleman, Yogyakarta 55288</h4>
    <h4 style="padding-top:-20px;">Telephone : 085 80 44444 73 Email : pondokashsholihah@gmail.com</h4>

    </div>
    </div>
    <hr />
<div class="col col-md-5" style="margin:0 5 5 auto;">
   
<table id="tabel" width="100%" >
<?php 
            $semester=$tahun->thn_semester;
            $tahun1=$tahun->thn_awal;
            $tahun2=$tahun->thn_akhir;
            $kode=$data->siswa_id;
            $nama=$data->siswa_nama;
            $nis=$data->siswa_nis;
            $kelas=$data->kelas_nama;
           ?>
    
    <tr>
        <th class="th1" align="left">Nomor Induk</th>
        <td class="td1">:</td>
        <td class="td1"><?php echo $nis; ?></td>
    </tr>
     <tr>
        <th class="th1" align="left">Nama</th>
        <td class="td1">:</td>
        <td class="td1"><?php echo $nama; ?></td>
    </tr>
    <tr>
        <th align="left" class="th1">Kelas</th>
        <td class="td1">:</td>
        <td class="td1"><?php echo $kelas; ?></td>
    </tr>
    <tr>
        <th align="left" class="th1">Semester</th>
        <td class="td1">:</td>
        <td class="td1"><?php if ($semester=='1'): ?>
            Ganjil (<?php echo $tahun1."/".$tahun2; ?>)
            <?php else: ?>
              Ganjil (<?php echo $tahun1."/".$tahun2; ?>) 
          <?php endif; ?>
        </td>
    </tr>
</table>

          <h4 >Nilai Mata Pelajaran</h4>

   <table id="tabelnilai" border="1" width="100%" class="table table-striped">
                <thead>
                <tr>
                   
                    <th rowspan="2">Kode Mapel</th>
                    <th rowspan="2">Nama Mapel</th>
                    <th colspan="3" style="text-align: center;">Nilai</th>
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

      <h4>Kehadiran</h4>
         <table id="tabelkehadiran" border="1" width="50%" >
                <thead>
                <tr>
                    <th >Alpha</th>
                    <th >Izin</th>
                </tr>
                </thead>
                <tbody>
                  
                <tr>
                  <td><?php echo $alpa ?></td>
                  <td><?php echo $izin ?></td>
                </tr>
       
                </tbody>
              </table> 
             <?php 
             $status=$catatan->rapor_status;
              ?>
<h4>Keterangan</h4>
         <table id="status"   width="100%" >
                <thead>
                <tr>
                    <th >Keterangan</th>
                    <th >:</th>
                    <th><?php if ($status=='1'):?>
                        Naik Kelas
                        <?php else: ?>
                            Tidak Naik
                        <?php endif; ?>
                    </th>

                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <th><?php echo $kelas; ?></th>
                </tr>
                </thead>
                <tbody>
                  
       
                </tbody>
              </table> 
              <?php 
              $laporan=$catatan->rapor_catatan;
               ?>
                    <h4 style="margin-bottom: -10px;">Catatan Wali</h4>
                    <div class="catatan">
                    <h4><?php echo $laporan; ?></h4> 
                </div>
               
</div>
</div>

<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
</body>
</html>

