
<?php 
	class M_administrasi extends CI_Model{


function simpan_adm($siswa_id,$wali_id,$tahun_ajaran,$jan,$feb,$mar,$apr,$mei,$jun,$jul,$ags,$sep,$okt,$nov,$des){
	$hsl=$this->db->query("INSERT INTO tbl_administrasi (adm_siswa_id,adm_wali_id,adm_semester,januari,februari,maret,april,mei,juni,juli,agustus,september,oktober,november,desember) VALUES ('$siswa_id','$wali_id','$tahun_ajaran','$jan','$feb','$mar','$apr','$mei','$jun','$jul','$ags','$sep','$okt','$nov','$des')");
	return $hsl;
}
function cek_adm($id){
	$hsl=$this->db->query("SELECT * FROM tbl_administrasi WHERE adm_siswa_id='$id'");
	return $hsl->num_rows();
}
function update_adm($jan,$feb,$mar,$apr,$mei,$jun,$jul,$ags,$sep,$okt,$nov,$des,$kode){
	$hsl=$this->db->query("UPDATE tbl_administrasi set januari='$jan',februari='$feb',maret='$mar',april='$apr',mei='$mei',juni='$jun',juli='$jul',agustus='$ags',september='$sep',oktober='$okt',november='$nov',desember='$des' WHERE adm_id='$kode'");
	return $hsl;
}
function get_administrasi($id){
	$hsl=$this->db->query("SELECT * FROM tbl_administrasi WHERE adm_siswa_id='$id'");
	return $hsl->row();
}


}