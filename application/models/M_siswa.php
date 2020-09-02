<?php 
class M_siswa extends CI_Model{


function get_profile($id){
		$this->db->where('siswa_id', $id);
		$hsl = $this->db->get('tbl_siswa')->row();
		
		return $hsl;	
	}


	function ambil_siswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa WHERE siswa_id='$idsantri'");
		return$hsl;
	}

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id JOIN tbl_pengguna on kelas_wali_id=pengguna_id where siswa_status=1");
		return $hsl;
	}
	function get_siswa_by_id($id){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id WHERE siswa_guru_id = '$id' and siswa_status=1" );
		return $hsl;
	}

	function get_siswa_by_nilai($id,$mapel_id){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa left JOIN tbl_nilai ON nilai_siswaId=siswa_id and nilai_mapelId='$mapel_id' WHERE siswa_guru_id='$id' and siswa_status=1 " );
		return $hsl;
	}

	function get_siswa_by_administrasi($id){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa left join tbl_administrasi on adm_siswa_id=siswa_id  WHERE siswa_guru_id='$id' and siswa_status=1 " );
		return $hsl;
	}

	function get_all_siswa_guru($id){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id WHERE siswa_guru_id = '$id' and siswa_status=1 ");
		return $hsl;
	}

	function simpan_siswa($siswa_guru_id,$nis,$nama,$jenkel,$kelas,$siswa_password,$random,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_guru_id,siswa_nis,siswa_password,siswa_password_lihat,siswa_nama,siswa_jenkel,siswa_kelas_id,siswa_photo) VALUES ('$siswa_guru_id','$nis',md5('$siswa_password'),'$random','$nama','$jenkel','$kelas','$photo')");
		return $hsl;
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$siswa_password,$random){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id,siswa_password,siswa_password_lihat) VALUES ('$nis','$nama','$jenkel','$kelas',md5('$siswa_password'),'$random')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_photo='$photo' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$siswa_password,$lihat_password){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_password=md5('$siswa_password'),siswa_password_lihat='$lihat_password' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	}

	function get_siswa_login($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_siswa where siswa_id='$kode'");
		return $hsl;
	}

}