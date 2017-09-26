<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Account extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('security');
        $this->load->library('email');

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

	function index() {
		if($this->session->userdata('login_status') == TRUE) {
            redirect('admin');
        }

        $data['title'] = "ADMIN - LOGIN | WebGis";
        $this->load->view('admin/v_login', $data);
	}

	function cek_login() {
        $data= array(
            'email' => $this->db->escape_str(antiInjections($this->input->post('email'))),
            'password' => $this->db->escape_str(antiInjections($this->input->post('password')))
            );
        $xss_data = $this->security->xss_clean($data);
        $result = $this->model_app->login($xss_data);

        if($result) {
            $sess_array = array();
            foreach($result as $row) {
                //create the session
                $sess_array = array(
                    'USERNAME' => $row->username,
                    'EMAIL' => $row->email,
                    'PASSWORD'=>$row->password,
                    'login_status'=>true,
                );
                //set session with value from database
                $this->session->set_userdata($sess_array);
                redirect('admin','refresh');
            }

            return TRUE;

        } 
         else {
            //if form validate false
            redirect('admin','refresh');
            return FALSE;
        }
    }



}

