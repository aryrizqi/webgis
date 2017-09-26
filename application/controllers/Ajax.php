<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller{

    function __construct(){
        parent::__construct();
       if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('error','Maaf akun anda belum login !');
            //$this->session->set_flashdata('danger','Maaf password yang anda masukkan salah !');
            redirect('admin');
        };

        $this->load->model('model_app');
        $this->load->library('security');
    }

    public function kd_kota() {
        $jdl = $this->input->post('nm_kota');
        $query = $this->model_app->getDataWhere('*', 'kota', 'nm_kota', $jdl);
        $count = $query->num_rows();
        $data = $query->row_array();
        $show = $data['kd_kota'];
        
        echo $show;
    }

}