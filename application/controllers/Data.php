<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Controller{
		function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('model_app');
        $this->load->library('form_validation');;
        $this->load->library('email');
        $this->load->library('pagination');
        $this->load->library('upload');
        $this->load->library('user_agent');
        $this->load->library('cart');

    }

function index() {
    $data['title'] = "WebGis - Data";
    $data['active_data'] = "active";

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_data', $data);
    $this->load->view('element/v_footer', $data);
  }

function detailKota() {
    $data['title'] = "WebGis - Detail Wilayah";

    $zei = $this->db->escape_str($_GET['waktu']);

    if($zei == "WIB") {
        $data['result'] = $this->model_app->getDataWhere('*', 'kota', 'wilayah', $zei);
    } else if ($zei == "WITA") {
        $data['result'] = $this->model_app->getDataWhere('*', 'kota', 'wilayah', $zei);
    } else if ($zei == "WIT") {
        $data['result'] = $this->model_app->getDataWhere('*', 'kota', 'wilayah', $zei);
    } 

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_data_kota', $data);
    $this->load->view('element/v_footer', $data);
}

function detailBulan() {
    $data['title'] = "WebGis - Detail Kota";

    $kd_kota = $this->db->escape_str($_GET['kd']);

    if(isset($kd_kota)) {
        $data['result'] = $this->model_app->getDataWhere('*', 'kota', 'kd_kota', $kd_kota);
    }

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_data_bulan', $data);
    $this->load->view('element/v_footer', $data);
}

function detailTanggal() {
    $data['title'] = "WebGis - Detail Kota Bulan";

    $kd_kota = $this->db->escape_str($_GET['kd_kota']);
    $bulan = $this->db->escape_str($_GET['bulan']);

    if(isset($kd_kota) && isset($bulan)) {
        $data['result'] = $this->model_app->getDataWhere('*','kota','kd_kota',$kd_kota); 
    }

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_data_tanggal', $data);
    $this->load->view('element/v_footer', $data);
}

function detailJam() {
    $data['title'] = "WebGis - Detail Kota Jam";

    $kd_kota = $this->db->escape_str($_GET['kd']);
    $bulan = $this->db->escape_str($_GET['bulan']);
    $tanggal = $this->db->escape_str($_GET['tanggal']);

    if(isset($kd_kota) && isset($bulan) && isset($tanggal)) {
        $data['result'] = $this->model_app->getDataWhere('*','kota','kd_kota',$kd_kota);
        $data['tinggi_meter'] = $this->model_app->getDataThreeWhere('*','tinggi_meter','kd_kota',$kd_kota,'bulan',$bulan,'tanggal',$tanggal); 
    }

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_data_jam', $data);
    $this->load->view('element/v_footer', $data);
}

function detailTinggiMeter() {
    $data['title'] = "WebGis - Detail Kota Tinggi Meter";

    $kd_kota = $this->db->escape_str($_GET['kd']);
    $bulan = $this->db->escape_str($_GET['bulan']);
    $tanggal = $this->db->escape_str($_GET['tanggal']);
    $jam = $this->db->escape_str($_GET['jam']);

    if(isset($kd_kota) && isset($bulan) && isset($tanggal) && isset($jam)) {
        $data['result'] = $this->model_app->getDataWhere('*','kota','kd_kota',$kd_kota);
        $data['tinggi_meter'] = $this->model_app->getDataFourWhere('*','tinggi_meter','kd_kota',$kd_kota,'bulan',$bulan,'tanggal',$tanggal,'jam',$jam); 
    }

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_tinggi_meter', $data);
    $this->load->view('element/v_footer', $data);
}

}