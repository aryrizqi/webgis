<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
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

        if($this->session->userdata('login_status') != TRUE){
            $this->session->set_flashdata('error','Maaf akun anda belum login !');
            //$this->session->set_flashdata('danger','Maaf password yang anda masukkan salah !');
            redirect('account');
        };

        function antiInjections($string) {
            $string = stripslashes($string);
            $string = strip_tags($string);
            //$string = mysql_real_escape_string($string);
            $string = htmlspecialchars($string);
            $string = htmlentities($string);
            $string = filter_var($string, FILTER_SANITIZE_STRING);
            return $string;
        }
    }

//============= FORM TINGGI METER ================//

function index() {
    $data['title'] = "Tinggi Meter Manager";
    $data['tinggimeter_manager'] = "active";
    $data['active_tinggimeter'] = "active";
    $result = $this->model_app->getAllData('tinggi_meter');
    $data['result'] = $result;

    $this->load->view('admin/v_header', $data);
    $this->load->view('admin/v_tinggimeter_manager', $data);
    $this->load->view('admin/v_footer', $data);
}

function form_tinggimeter() {
    $data['title'] = "Form Tinggi Meter Manager";
    $data['tinggimeter_form'] = "active";
    $data['active_tinggimeter_form'] = "active";
    $data['judul'] = $this->model_app->getAllData('kota');
    $data['kd_tinggi'] = $this->model_app->auto_number("tinggi_meter", "kd_tinggi", "TM",4);
    
    if(isset($_GET['id'])) {
        $getid = $this->db->escape_str(antiInjections($_GET['id']));
        $data['getid'] = $getid;

        $data['result'] = $this->model_app->getDataWhere('*','tinggi_meter', 'id', $getid);
    }
    
    $this->load->view('admin/v_header', $data);
    $this->load->view('admin/v_form_tinggimeter', $data);
    $this->load->view('admin/v_footer', $data);
}

function add_form_tinggimeter() {
        
        $data = array(
            'kd_tinggi' => $this->input->post('kd_tinggi'),
            'kd_kota' => $this->input->post('kd_kota'),
            'tinggi_meter' => $this->input->post('tinggi_meter'),
            'wilayah' => $this->input->post('wilayah'),
            'nm_kota' => $this->input->post('nm_kota'),
            'bulan'   => $this->input->post('bulan'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            );

    $xss_data = $this->security->xss_clean($data);
    $this->model_app->getInsert('tinggi_meter', $xss_data);
    redirect('admin');
}

function edit_form_tinggimeter() {

	$getid = $this->db->escape_str(antiInjections($_GET['id']));
    
        $data = array(
            'kd_tinggi' => $this->input->post('kd_tinggi'),
            'kd_kota' => $this->input->post('kd_kota'),
            'tinggi_meter' => $this->input->post('tinggi_meter'),
            'wilayah' => $this->input->post('wilayah'),
            'nm_kota' => $this->input->post('nm_kota'),
            'bulan'   => $this->input->post('bulan'),
            'tanggal' => $this->input->post('tanggal'),
            'jam' => $this->input->post('jam'),
            );
        
    $xss_data = $this->security->xss_clean($data);
    $this->model_app->getUpdate('tinggi_meter','id', $xss_data, $getid);
    redirect('admin');
}

function delete_form_tinggimeter() {

    $getid = $this->db->escape_str(antiInjections($_GET['id']));

    $this->model_app->getDelete('tinggi_meter','id',$getid);
    redirect('admin');

}

//=========== FORM TINGGI METER =============== //


//============= FORM KOTA ================//

function kota_manager() {
    $data['title'] = "Kota Manager";
    $data['kota_manager'] = "active";
    $data['active_kota'] = "active";
    $result = $this->model_app->getAllData('kota');
    $data['result'] = $result;

    $this->load->view('admin/v_header', $data);
    $this->load->view('admin/v_kota', $data);
    $this->load->view('admin/v_footer', $data);
}

function form_kota() {
    $data['title'] = "Form Kota Manager";
    $data['kota_form'] = "active";
    $data['active_kota'] = "active";
    $data['id'] = $this->model_app->auto_number("kota", "kd_kota", "K",4);
    
    if(isset($_GET['id'])) {
        $getid = $this->db->escape_str(antiInjections($_GET['id']));
        $data['getid'] = $getid;

        $data['result'] = $this->model_app->getDataWhere('*','kota', 'id', $getid);
    }
    
    $this->load->view('admin/v_header', $data);
    $this->load->view('admin/v_form_kota', $data);
    $this->load->view('admin/v_footer', $data);
}

function add_form_kota() {
        
        $data = array(
            'kd_kota' => $this->input->post('kd_kota'),
            'wilayah' => $this->input->post('wilayah'),
            'nm_kota' => $this->input->post('nm_kota'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'waktu' => $this->input->post('waktu'),
            'tipe_pasut' => $this->input->post('tipe_pasut'),
            );

    $this->model_app->getInsert('kota', $data);
    redirect('admin/kota_manager');
}

function edit_form_kota() {

	$getid = $this->db->escape_str(antiInjections($_GET['id']));
    
        $data = array(
            'kd_kota' => $this->input->post('kd_kota'),
            'wilayah' => $this->input->post('wilayah'),
            'nm_kota' => $this->input->post('nm_kota'),
            'lintang' => $this->input->post('lintang'),
            'bujur' => $this->input->post('bujur'),
            'waktu' => $this->input->post('waktu'),
            'tipe_pasut' => $this->input->post('tipe_pasut'),
            ); 

    $this->model_app->getUpdate('kota','id', $data, $getid);
    redirect('admin/kota_manager');
}

function delete_form_kota() {

    $getid = $this->db->escape_str(antiInjections($_GET['id']));

    $this->model_app->getDelete('kota','id',$getid);
    redirect('admin/kota_manager');

}
//=========== FORM KOTA =============== //


function logout() {
	$this->session->unset_userdata('USERNAME');
	$this->session->unset_userdata('EMAIL');
	$this->session->unset_userdata('PASSWORD');
	$this->session->unset_userdata('login_status');
	$this->session->set_flashdata('alert','AKUN ANDA TELAH BERHASIL LOGOUT');
	redirect('account');

  }

}