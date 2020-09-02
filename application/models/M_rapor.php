<?php 

class M_rapor extends CI_Model{


	function get_rapor_byid($idadmin,$id){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa  JOIN tbl_kelas ON siswa_kelas_id=kelas_id where siswa_guru_id='$idadmin' and siswa_id='$id' ");
		return $hsl->row();

	}
	function get_rapor_by_wali($wali_baru,$id){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa  JOIN tbl_kelas ON siswa_kelas_id=kelas_id where siswa_guru_id='$wali_baru' and siswa_id='$id' ");
		return $hsl->row();

	}
	function lihat_rapor($id){
		$hsl=$this->db->query("SELECT * FROM tbl_rapor join tbl_siswa on rapor_siswaId=siswa_id where rapor_siswaId='$id'");
		return $hsl->row();
	}
	function get_nama($id){
		$hsl=$this->db->query("SELECT siswa_nama, siswa_nis FROM tbl_siswa where siswa_id='$id'");
		return $hsl->row();
	}
	function get_wali_baru($id){
		$hsl=$this->db->query("SELECT * FROM tbl_rapor JOIN tbl_kelas ON rapor_kelas=kelas_id where rapor_siswaId='$id' ");
		return $hsl->row();
	}
	function get_nilai($id,$wali_id){
		$hsl=$this->db->query("SELECT * FROM tbl_nilai join tbl_mapel on nilai_mapelId=mapel_id  where nilai_siswaId='$id' and nilai_waliId='$wali_id' " );
		return $hsl;
}
function get_absen_alpha($id){
	$hsl=$this->db->query("SELECT * from tbl_absensi where absen_siswa_id='$id' and absen_status=1");
	return $hsl;
}
function get_absen_izin($id){
	$hsl=$this->db->query("SELECT * from tbl_absensi where absen_siswa_id='$id' and absen_status=2 ORDER BY absensi_id DESC");
	return $hsl;
}
function ambil_kelas(){
	$hsl=$this->db->query("SELECT * From tbl_kelas order by kelas_id desc");
	return $hsl->result();
}
function simpan_rapor($id_siswa,$semester,$status,$kelas,$catatan,$wali_id){
	$hsl=$this->db->query("INSERT INTO tbl_rapor (rapor_siswaId,rapor_semester,rapor_status, rapor_kelas, rapor_catatan, rapor_WaliId) VALUES ('$id_siswa','$semester','$status','$kelas','$catatan','$wali_id')");
	return $hsl;
}
function update_kelas($id_siswa,$kelas,$wali){
	$hsl=$this->db->query("UPDATE tbl_siswa set siswa_kelas_id='$kelas', siswa_guru_id='$wali' where siswa_id='$id_siswa' ");
	return $hsl;
}
function update_kelasStatus($id_siswa,$kelas,$status){
	$hsl=$this->db->query("UPDATE tbl_siswa set siswa_kelas_id='$kelas', siswa_status='$status' where siswa_id='$id_siswa' ");
	return $hsl;
}
function get_wali($kelas){
	$hsl=$this->db->query("SELECT kelas_wali_id from tbl_kelas where kelas_id='$kelas'");
	return $hsl->row();
}
function ambil_rapor($id){
	$hsl=$this->db->query("SELECT * FROM tbl_rapor JOIN tbl_kelas on rapor_kelas=kelas_id where rapor_siswaId='$id' ");
	return $hsl->row();
}
function listRapor($idadmin){
	$hsl=$this->db->query("SELECT * FROM tbl_rapor JOIN tbl_siswa ON siswa_id=rapor_siswaId JOIN tbl_kelas ON kelas_id=rapor_kelas where rapor_WaliId='$idadmin'");
	return $hsl;
}
function list_rapor($idsantri){
	$hsl=$this->db->query("SELECT * FROM tbl_rapor join tbl_thn_ajaran on rapor_semester=thn_id join tbl_kelas on rapor_kelas=kelas_id where rapor_siswaId='$idsantri'");
	return $hsl;
}
function get_wali_input($id,$semester){
	$hsl=$this->db->query("SELECT * from tbl_rapor where rapor_siswaId='$id' and rapor_semester='$semester'");
	return $hsl->row();
}
function get_nilai_santri($id,$waliInput){
	$hsl=$this->db->query("SELECT *FROM tbl_nilai join tbl_mapel on nilai_mapelId=mapel_id where nilai_siswaId='$id' and nilai_waliId='$waliInput'");
	return $hsl;
}
function get_rapor_all($id,$id_semester){
	$hsl=$this->db->query("SELECT * FROM tbl_rapor join tbl_kelas on rapor_kelas=kelas_id where rapor_siswaId='$id' and rapor_semester='$id_semester'");
	return $hsl->row();
}
}