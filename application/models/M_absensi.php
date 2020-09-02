
<?php 
	class M_absensi extends CI_Model{

function simpan_absen($album,$user_id,$user_nama,$gambar){
		$hsl=$this->db->query("insert into tbl_absen(')");
		return $hsl;
			}
function lihat_absen($tanggal,$idadmin,$enddate){
		$hsl=$this->db->query("SELECT * FROM tbl_absensi join tbl_siswa on absen_siswa_id=siswa_id WHERE absen_tanggal >= '$tanggal' AND absen_tanggal <= 'enddate' AND absen_guru_id='$idadmin' ORDER BY absen_tanggal ");
		return $hsl;
			}
function lihat_absen_siswa($tanggal,$idsantri){
		$hsl=$this->db->query("SELECT * FROM tbl_absensi WHERE absen_tanggal='$tanggal' AND absen_siswa_id='$idsantri'");
		return $hsl;
			}
function get_absen_santri($idsantri){
		$hsl=$this->db->query("SELECT * FROM tbl_absensi join tbl_siswa on absen_siswa_id=siswa_id WHERE absen_siswa_id='$idsantri' and absen_status >=1 ORDER BY absensi_id desc ");
		return $hsl;
			}

}
