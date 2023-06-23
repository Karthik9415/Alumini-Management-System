<?php
class Eventtable extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->model('alumni');
                 $ddd['quans']= $this->alumni->tab();
        $this->load->view('eventtable',$ddd);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

}