<?php
class Even extends CI_Controller{
    function __construct(){
        parent::__construct();
         if($this->session->userdata('status') != 'login'){
             ?>
        <script type="text/javascript">
         alert('jangan macam macam disini ya');
        </script>
            <?php
            redirect('iven');
        }else{
            $this->load->model('queri');
            $id_user=$this->session->userdata('id_user');
            $data['user']=$this->queri->t_user1($id_user);
            $this->load->view('navbar',$data);
       }
    }
     function index(){ 
        $this->load->view('home');
    }

//header__________________________________
     function header(){ 
       $data['header']=$this->queri->t_header();
       $this->load->view('header',$data);
    }
    function sheader(){ 
        $id_header=$this->input->post('id_header');
        $paswod=$this->input->post('paswod');
        $nama=$this->input->post('nama');
        $this->queri->s_header($id_header,$nama,$paswod);
        redirect('even/header');
    }
//item___________________________________
     function item(){ 
       $data['item']=$this->queri->t_item();
       $this->load->view('item',$data);
    }
    function sitem(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->s_item($id_header,$tanggal,$nama);
        redirect('even/item');
    }
    function uitem(){ 
        $id_item=$this->input->post('id_item');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->u_item($id_item,$id_modif,$tanggal,$aktif,$nama);
        redirect('even/item');
    }
//kategori___________________________________
     function kategori(){ 
       $data['kategori']=$this->queri->t_kategori();
       $this->load->view('kategori',$data);
    }
    function skategori(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->s_kategori($id_header,$tanggal,$nama);
        redirect('even/kategori');
    }
    function ukategori(){ 
        $id_kategori=$this->input->post('id_kategori');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->u_kategori($id_kategori,$id_modif,$tanggal,$aktif,$nama);
        redirect('even/kategori');
    }
//satuan___________________________________
     function satuan(){ 
       $data['satuan']=$this->queri->t_satuan();
       $this->load->view('satuan',$data);
    }
    function ssatuan(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->s_satuan($id_header,$tanggal,$nama);
        redirect('even/satuan');
    }
    function usatuan(){ 
        $id_satuan=$this->input->post('id_satuan');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->u_satuan($id_satuan,$id_modif,$tanggal,$aktif,$nama);
        redirect('even/satuan');
    }
//harga___________________________________
     function harga(){ 
       $data['harga']=$this->queri->t_harga();
       $this->load->view('harga',$data);
    }
    function sharga(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $hrg=$this->input->post('hrg');
        $this->queri->s_harga($id_header,$tanggal,$nama,$hrg);
        redirect('even/harga');
    }
    function uharga(){ 
        $id_harga=$this->input->post('id_harga');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $hrg=$this->input->post('hrg');
        $this->queri->u_harga($id_harga,$id_modif,$tanggal,$aktif,$nama,$hrg);
        redirect('even/harga');
    }
//diskon___________________________________
     function diskon(){ 
       $data['diskon']=$this->queri->t_diskon();
       $this->load->view('diskon',$data);
    }
    function sdiskon(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $disko=$this->input->post('disko');
        $this->queri->s_diskon($id_header,$tanggal,$nama,$disko);
        redirect('even/diskon');
    }
    function udiskon(){ 
        $id_diskon=$this->input->post('id_diskon');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $disko=$this->input->post('disko');
        $this->queri->u_diskon($id_diskon,$id_modif,$tanggal,$aktif,$nama,$disko);
        redirect('even/diskon');
    }
//barang___________________________________
     function barang(){ 
       $data['barang']=$this->queri->t_barang();
       $this->load->view('barang',$data);
    }
    function sbarang(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $tipe=$this->input->post('tipe');
         $keterangan=$this->input->post('keterangan');
         $id_item=$this->input->post('id_item');
         $id_kategori=$this->input->post('id_kategori');
         $id_satuan=$this->input->post('id_satuan');
         $id_harga=$this->input->post('id_harga');
         $id_diskon=$this->input->post('id_diskon');
        $this->queri->s_barang($id_header,$tanggal,$nama,$tipe,$keterangan,$id_item,$id_kategori,$id_satuan,$id_harga,$id_diskon);
        redirect('even/barang');
    }
    function ubarang(){ 
        $id_barang=$this->input->post('id_barang');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $tipe=$this->input->post('tipe');
         $keterangan=$this->input->post('keterangan');
         $id_item=$this->input->post('id_item');
         $id_kategori=$this->input->post('id_kategori');
         $id_satuan=$this->input->post('id_satuan');
         $id_harga=$this->input->post('id_harga');
         $id_diskon=$this->input->post('id_diskon');
        $this->queri->u_barang($id_barang,$id_modif,$tanggal,$aktif,$nama,$tipe,$keterangan,$id_item,$id_kategori,$id_satuan,$id_harga,$id_diskon);
        redirect('even/barang');
    }
//suplayer___________________________________
     function suplayer(){ 
       $data['suplayer']=$this->queri->t_suplayer();
       $this->load->view('suplayer',$data);
    }
    function ssuplayer(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $alamat=$this->input->post('alamat');
         $kecamatan=$this->input->post('kecamatan');
         $kabupaten=$this->input->post('kabupaten');
         $hp=$this->input->post('hp');
         $npwp=$this->input->post('nama');
         $ppn=$this->input->post('ppn');
         $pilih=$this->input->post('pilih');
        $this->queri->s_suplayer($id_header,$tanggal,$nama,$alamat,$kecamatan,$kabupaten,$hp,$npwp,$ppn,$pilih);
        redirect('even/suplayer');
    }
    function usuplayer(){ 
        $id_suplayer=$this->input->post('id_suplayer');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $alamat=$this->input->post('alamat');
         $kecamatan=$this->input->post('kecamatan');
         $kabupaten=$this->input->post('kabupaten');
         $hp=$this->input->post('hp');
         $npwp=$this->input->post('nama');
         $ppn=$this->input->post('ppn');
         $pilih=$this->input->post('pilih');
        $this->queri->u_suplayer($id_suplayer,$id_modif,$tanggal,$aktif,$nama,$alamat,$kecamatan,$kabupaten,$hp,$npwp,$ppn,$pilih);
        redirect('even/suplayer');
    }
//customer___________________________________
     function customer(){ 
       $data['customer']=$this->queri->t_customer();
       $this->load->view('customer',$data);
    }
    function scustomer(){ 
        $id_header=$this->input->post('id_header');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $nama=$this->input->post('nama');
         $alamat=$this->input->post('alamat');
         $kecamatan=$this->input->post('kecamatan');
         $kabupaten=$this->input->post('kabupaten');
         $hp=$this->input->post('hp');
         $pilih=$this->input->post('pilih');
        $this->queri->s_customer($id_header,$tanggal,$nama,$alamat,$kecamatan,$kabupaten,$hp,$pilih);
        redirect('even/customer');
    }
    function ucustomer(){ 
        $id_customer=$this->input->post('id_customer');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
         $nama=$this->input->post('nama');
         $alamat=$this->input->post('alamat');
         $kecamatan=$this->input->post('kecamatan');
         $kabupaten=$this->input->post('kabupaten');
         $hp=$this->input->post('hp');
         $pilih=$this->input->post('pilih');
        $this->queri->u_customer($id_customer,$id_modif,$tanggal,$aktif,$nama,$alamat,$kecamatan,$kabupaten,$hp,$pilih);
        redirect('even/customer');
    }
//role___________________________________
     function role(){ 
       $data['role']=$this->queri->t_role();
       $this->load->view('role',$data);
    }
    function srole(){ 
        
        $id_header=$this->input->post('id_header');
        $nama=$this->input->post('nama');
        $tanggal=date('d-m-Y');
        $this->queri->s_role($id_header,$nama,$tanggal);
        redirect('even/role');
    }
    function urole(){ 
        $id_role=$this->input->post('id_role');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $tanggal=date('d-m-Y');
         $nama=$this->input->post('nama');
        $this->queri->u_role($id_role,$id_modif,$tanggal,$aktif,$nama);
        redirect('even/role');
    }
//user_____________________________________________
    function user(){ 
         $data['user1']=$this->queri->t_user1();
        $this->load->view('user',$data);
    }
    function suser(){ 
        $nama=$this->input->post('nama');
        $id_header=$this->input->post('id_header');
        $paswod=$this->input->post('paswod');
        $alamat=$this->input->post('alamat');
        $kecamatan=$this->input->post('kecamatan');
        $kabupaten=$this->input->post('kabupaten');
        $hp=$this->input->post('hp');
        $tanggal=date('d-m-Y');
        $this->queri->s_role($id_header,$nama,$paswod,$alamat,$kecamatan,$kabupaten,$hp,$tanggal);
        redirect('even/role');
    }
    function uuser(){ 
        $id_user=$this->input->post('id_user');
        $id_modif=$this->input->post('id_modif');
        $aktif=$this->input->post('aktif');
        $nama=$this->input->post('nama');
        $paswod=$this->input->post('paswod');
        $alamat=$this->input->post('alamat');
        $kecamatan=$this->input->post('kecamatan');
        $kabupaten=$this->input->post('kabupaten');
        $hp=$this->input->post('hp');
        $tanggal=date('d-m-Y');
        $this->queri->s_role($id_user,$nama,$paswod,$alamat,$kecamatan,$kabupaten,$hp,$tanggal,$aktif,$id_modif);
        redirect('even/role');
    }
    


    

//end--------------------------
}