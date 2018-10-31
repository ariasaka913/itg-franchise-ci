<?php 
class Queri extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function e_login($id_user,$paswod){
		$q=$this->db->query("SELECT*FROM user where id_user='$id_user' and paswod='$paswod' ");
		return $q;
	}

  //item  ________________________________________________
  function t_item1($id_item){
    $q=$this->db->query("SELECT*FROM item where id_item='$id_item' ");
  return $q;
  }
  function t_item(){
    $q=$this->db->query("SELECT*FROM item");
  return $q;
  }
  function s_item($id_header,$tanggal,$nama){
   $q=$this->db->query("INSERT INTO item values(null,'$id_header','','$tanggal','ya','$nama')");
   return $q;
 }
 function u_item($id_item,$id_modif,$tanggal,$aktif,$nama){
   $q=$this->db->query("UPDATE item set nama='$nama',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_item='$id_item' ");
   return $q;
 }
 // kategori ________________________________________________
  function t_kategori1($id_kategori){
    $q=$this->db->query("SELECT*FROM kategori where id_kategori='$id_kategori' ");
  return $q;
  }
  function t_kategori(){
    $q=$this->db->query("SELECT*FROM kategori");
  return $q;
  }
  function s_kategori($id_header,$tanggal,$nama){
   $q=$this->db->query("INSERT INTO kategori values(null,'$id_header','','$tanggal','ya','$nama')");
   return $q;
 }
 function u_kategori($id_kategori,$id_modif,$tanggal,$aktif,$nama){
   $q=$this->db->query("UPDATE kategori set nama='$nama',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_kategori='$id_kategori' ");
   return $q;
 }
 // satuan ________________________________________________
  function t_satuan1($id_satuan){
    $q=$this->db->query("SELECT*FROM satuan where id_satuan='$id_satuan' ");
  return $q;
  }
  function t_satuan(){
    $q=$this->db->query("SELECT*FROM satuan");
  return $q;
  }
  function s_satuan($id_header,$tanggal,$nama){
   $q=$this->db->query("INSERT INTO satuan values(null,'$id_header','','$tanggal','ya','$nama')");
   return $q;
 }
 function u_satuan($id_satuan,$id_modif,$tanggal,$aktif,$nama){
   $q=$this->db->query("UPDATE satuan set nama='$nama',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_satuan='$id_satuan' ");
   return $q;
 }
 // harga ________________________________________________
  function t_harga1($id_harga){
    $q=$this->db->query("SELECT*FROM harga where id_harga='$id_harga' ");
  return $q;
  }
  function t_harga(){
    $q=$this->db->query("SELECT*FROM harga");
  return $q;
  }
  function s_harga($id_header,$tanggal,$nama,$hrg){
   $q=$this->db->query("INSERT INTO harga values(null,'$id_header','','$tanggal','ya','$nama','$hrg')");
   return $q;
 }
 function u_harga($id_harga,$id_modif,$tanggal,$aktif,$nama,$hrg){
   $q=$this->db->query("UPDATE harga set nama='$nama',hrg='$hrg',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_harga='$id_harga' ");
   return $q;
 }
 //diskon  ________________________________________________
  function t_diskon1($id_diskon){
    $q=$this->db->query("SELECT*FROM diskon where id_diskon='$id_diskon' ");
  return $q;
  }
  function t_diskon(){
    $q=$this->db->query("SELECT*FROM diskon");
  return $q;
  }
  function s_diskon($id_header,$tanggal,$nama,$disko){
   $q=$this->db->query("INSERT INTO diskon values(null,'$id_header','','$tanggal','ya','$nama','$disko')");
   return $q;
 }
 function u_diskon($id_diskon,$id_modif,$tanggal,$aktif,$nama,$disko){
   $q=$this->db->query("UPDATE diskon set nama='$nama',disko='$disko',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_diskon='$id_diskon' ");
   return $q;
 }
 // barang ________________________________________________
  function t_barang1($id_barang){
    $q=$this->db->query("SELECT*FROM barang where id_barang='$id_barang' ");
  return $q;
  }
  function t_barang(){
    $q=$this->db->query("SELECT*FROM barang");
  return $q;
  }
  function s_barang($id_header,$tanggal,$nama,$id_item,$id_kategori,$id_satuan,$id_harga,$id_diskon,$tipe,$keterangan){
   $q=$this->db->query("INSERT INTO barang values(null,'$id_header','','$tanggal','ya','$nama','$id_item','$id_kategori','$id_satuan','$id_harga','$id_diskon','$tipe','$keterangan')");
   return $q;
 }
 function u_barang($id_barang,$id_modif,$tanggal,$aktif,$nama,$id_item,$id_kategori,$id_satuan,$id_harga,$id_diskon,$tipe,$keterangan){
   $q=$this->db->query("UPDATE barang set nama='$nama',id_item='$id_item',id_kategori='$id_kategori',id_satuan='$id_satuan',id_harga='$id_diskon',tipe='$tipe',keterangan='$keterangan',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_barang='$id_barang' ");
   return $q;
 }
 // suplayer ________________________________________________
  function t_suplayer1($id_suplayer){
    $q=$this->db->query("SELECT*FROM where id_suplayer='$id_suplayer' ");
  return $q;
  }
  function t_suplayer(){
    $q=$this->db->query("SELECT*FROM suplayer");
  return $q;
  }
  function s_suplayer($id_header,$tanggal,$nama,$alamat,$kecamatan,$kabupaten,$hp,$npwp,$ppn,$pilih){
   $q=$this->db->query("INSERT INTO suplayer values(null,'$id_header','','$tanggal','ya','$nama','$alamat','$kecamatan','$kabupaten','$hp','$npwp','$ppn','$pilih')");
   return $q;
 }
 function u_suplayer($id_suplayer,$id_modif,$tanggal,$aktif,$nama,$alamat,$kecamatan,$kabupaten,$hp,$npwp,$ppn,$pilih){
   $q=$this->db->query("UPDATE suplayer set nama='$nama',alamat='$alamat',kecamatan='$kecamatan',kabupaten='$kabupaten',hp='$hp',npwp='$npwp',ppn='$ppn',pilih='$pilih',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_suplayer='$id_suplayer' ");
   return $q;
 }

 // customer ________________________________________________
  function t_customer1($id_customer){
    $q=$this->db->query("SELECT*FROM customer where id_customer='$id_customer' ");
  return $q;
  }
  function t_customer(){
    $q=$this->db->query("SELECT*FROM customer");
  return $q;
  }
  function s_customer($id_header,$tanggal,$nama,$alamat,$kecamatan,$kabupaten,$hp,$pilih){
   $q=$this->db->query("INSERT INTO customer values(null,'$id_header','','$tanggal','ya','$nama','$alamat','$kecamatan','$kabupaten','$hp','$pilih')");
   return $q;
 }
 function u_customer($id_customer,$id_modif,$tanggal,$aktif,$nama,$alamat,$kecamatan,$kabupaten,$hp,$pilih){
   $q=$this->db->query("UPDATE customer set nama='$nama',alamat='$alamat',kecamatan='$kecamatan',kabupaten='$kabupaten',hp='$hp',pilih='$pilih',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_customer='$id_customer' ");
   return $q;
 }
	
//header ___________________________________________________
  function t_header1($id_u){
  	$q=$this->db->query("SELECT*FROM header where id_header='$id_u'");
	return $q;
  }
  function t_header(){
    $q=$this->db->query("SELECT*FROM header where id_header='$id_u'");
  return $q;
  }
  function s_header($id_header,$nama,$paswod){
   $q=$this->db->query("INSERT INTO role values(null,'$nama','$paswod')");
   return $q;
 }

  // role ________________________________________________
  function t_role(){
  	$q=$this->db->query("SELECT*FROM role");
	return $q;
  }
  function s_role($id_header,$nama,$tanggal){
   $q=$this->db->query("INSERT INTO role values(null,'$id_header','','$tanggal','ya','$nama')");
   return $q;
 }
 function u_role($id_role,$id_modif,$nama,$tanggal,$aktif){
   $q=$this->db->query("UPDATE role set nama='$nama',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif' where id_role='$id_role' ");
   return $q;
 }

 // user _________________________________________________
 function t_user1($id_user){
  $q=$this->db->query("SELECT*FROM user where id_user='$id_user'");
  return $q;
  }
  function t_user(){
  	$q=$this->db->query("SELECT*FROM user");
	return $q;
  }
  function s_user($id_header,$tanggal,$nama,$paswod,$alamat,$kecamatan,$kabupaten,$hp){
   $q=$this->db->query("INSERT INTO user values(null,'$id_header','','$tanggal','ya','$nama','$paswod','$alamat','$kecamatan','$kabupaten','$hp')");
   return $q;
 }
 function u_user($id_user,$id_modif,$nama,$tanggal,$aktif){
   $q=$this->db->query("UPDATE user set nama='$nama',aktif='$aktif',tanggal='$tanggal',id_modif='$id_modif',paswod='$paswod',alamat='$alamat',kecamatan='$kecamatan',kabupaten='$kabupaten',hp='$hp' where id_user='$id_user' ");
   return $q;
 }


}
