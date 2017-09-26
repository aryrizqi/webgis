<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
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
    $data['title'] = "WebGis - Home";
    $data['active_home'] = "active";

    $this->load->view('element/v_header', $data);
    $this->load->view('pages/v_home', $data);
    $this->load->view('element/v_footer', $data);
  }

}