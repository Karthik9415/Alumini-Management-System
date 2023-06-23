<?php
class Inbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $gm=$_SESSION['email'];
        $this->load->model('alumni');
     $ddd['rats']=$this->alumni->inbox($gm);
        $this->load->view('inbox',$ddd);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}