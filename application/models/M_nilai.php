
<?php 
	class M_nilai extends CI_Model{

	function input_nilai($kode,$nilai_waliId,$mapel_id,$nilai1,$nilai2,$nilaiakhir){
		$hsl=$this->db->query("INSERT INTO tbl_nilai (nilai_siswaId,nilai_waliId,nilai_mapelId,nilai1,nilai2,nilai_akhir) Values ('$kode','$nilai_waliId','$mapel_id','$nilai1','$nilai2','$nilaiakhir')");
		return $hsl;
			}

	function lihat_nilai($idsantri){
		$hsl=$this->db->query("SELECT * FROM tbl_nilai JOIN tbl_mapel on nilai_mapelId=mapel_id WHERE nilai_siswaId='$idsantri'");
		return $hsl;
	}
// 		function lihat_absen($tanggal,$idadmin,$enddate){
// 		$hsl=$this->db->query("SELECT * FROM tbl_absensi join tbl_siswa on absen_siswa_id=siswa_id WHERE absen_tanggal >= '$tanggal' AND absen_tanggal <= 'enddate' AND absen_guru_id='$idadmin'");
// 		return $hsl;
// 			}
// function lihat_absen_siswa($tanggal,$idsantri){
// 		$hsl=$this->db->query("SELECT * FROM tbl_absensi WHERE absen_tanggal='$tanggal' AND absen_siswa_id='$idsantri'");
// 		return $hsl;
// 			}

}
