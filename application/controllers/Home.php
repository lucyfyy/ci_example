<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Perancangan Web 2
// Prodi D3TI

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('logged') != TRUE){
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index(){
        $this->load->view('view-home');
    }
}
?>