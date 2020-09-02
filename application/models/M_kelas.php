<?php
class M_kelas extends CI_Model{

	function ambil_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas");
		return $hsl;
	}

	function ambil_kategori_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kategori_kelas");
		return $hsl;
	}

	function get_kelas_wali_id($id_kelas){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas where kelas_id='$id_kelas'");
		return $hsl->row();

	}
	function cekwali($idwalikelas){
		$hsl=$this->db->query("SELECT kelas_wali_id FROM tbl_kelas WHERE kelas_wali_id='$idwalikelas'");
		return $hsl->row();
	}

		function get_kategori_wali($idadmin){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas where kelas_wali_id='$idadmin'");
		return $hsl->row();

	}

	function get_id_kelas($siswa_guru_id){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas where kelas_wali_id='$siswa_guru_id'");
		return $hsl->row();

	}

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas join tbl_pengguna on kelas_wali_id=pengguna_id join tbl_kategori_kelas on kelas_kategori_id=kategori_id ORDER BY kelas_id DESC");
		return $hsl;
	}

	function simpan_kelas($kelas,$idwalikelas,$idkategorikelas){
		$hsl=$this->db->query("INSERT INTO tbl_kelas (kelas_nama,kelas_wali_id,kelas_kategori_id) VALUES ('$kelas','$idwalikelas','$idkategorikelas')");
		return $hsl;
	}
	function simpan_kategori_kelas($kategori_kelas){
		$hsl=$this->db->query("INSERT INTO tbl_kategori_kelas (kategori_kelas) VALUES ('$kategori_kelas')");
		return $hsl;
	}

	function update_kelas($kelas,$idwalikelas,$kode){
		$hsl=$this->db->query("UPDATE tbl_kelas SET kelas_nama='$kelas',kelas_wali_id='$idwalikelas' WHERE kelas_id='$kode'");
		return $hsl;

	}

	function hapus_kelas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kelas WHERE kelas_id='$kode'");
		return $hsl;
	}

	function hapus_kategori_kelas($kode){
		$hsl=$this->db->query("DELETE FROM tbl_kategori_kelas WHERE kategori_id='$kode'");
		return $hsl;
	}

}