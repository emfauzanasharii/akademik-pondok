<?php
class M_pelajaran extends CI_Model{

	function get_all_pelajaran(){
		$hsl=$this->db->query("SELECT * from tbl_mapel join tbl_kelas on mapel_kelas=kelas_id join tbl_kategori_kelas on mapel_kategori_kelas=kategori_id ORDER BY mapel_id DESC");
		return $hsl;
	}

	function get_nama_mapel($mapel_id){
		$hsl=$this->db->query("SELECT mapel_nama,mapel_id FROM tbl_mapel WHERE mapel_id='$mapel_id'");
		return $hsl;
	}
	function simpan_pelajaran($kodemapel,$namamapel,$kelasmapel,$idgurumapel,$mapel_kategori_kelas){
		$hsl=$this->db->query("INSERT INTO tbl_mapel (mapel_kode,mapel_nama,mapel_kelas,mapel_guru_id,mapel_kategori_kelas) VALUES ('$kodemapel','$namamapel','$kelasmapel','$idgurumapel','$mapel_kategori_kelas')");
		return $hsl;
	}

	function update_pelajaran($kode,$kodemapel,$namamapel,$kelasmapel,$idgurumapel){
		$hsl=$this->db->query("UPDATE tbl_mapel SET mapel_kode='$kodemapel',mapel_nama='$namamapel',mapel_kelas='$kelasmapel',mapel_guru_id='$idgurumapel' WHERE mapel_id='$kode'");
		return $hsl;

	}

	function hapus_pelajaran($kode){
		$hsl=$this->db->query("DELETE FROM tbl_mapel WHERE mapel_id='$kode'");
		return $hsl;
	}

	function get_mapel_kategori_kelas($kelasmapel){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas where kelas_id='$kelasmapel'");
		return $hsl->row();

	}

	function get_kategori_mapel($kategorikelaswali){
		$hsl=$this->db->query("SELECT * FROM tbl_mapel where mapel_kategori_kelas='$kategorikelaswali'");
		return $hsl;

	}
}
