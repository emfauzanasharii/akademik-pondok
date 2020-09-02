<?php 

class M_tahun_ajaran extends CI_Model{

	function simpan_tahun($semester,$tahun_awal,$tahun_akhir){
		$hsl=$this->db->query("INSERT INTO tbl_thn_ajaran(thn_semester,thn_awal,thn_akhir) VALUES ('$semester','$tahun_awal','$tahun_akhir')");
		return $hsl;
	}

	function get_tahun_ajaran(){
		$hsl=$this->db->query("SELECT * FROM tbl_thn_ajaran ORDER BY thn_id DESC LIMIT 2");
		return $hsl;
	}

		function hapus_tahun($kode){
		$hsl=$this->db->query("DELETE FROM tbl_thn_ajaran WHERE thn_id='$kode'");
		return $hsl;
	}


}