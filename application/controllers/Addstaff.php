<?php
class Addstaff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('addstaff');
    }
    public function add()
    {
        $gowtham=array(
            'staffid'=>$_POST['staffid'],
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'description'=>$_POST['description']
        );
        $this->load->model('alumni');
        $this->alumni->add($gowtham);
    }
    public function logout()
    {
        $this->session->sess_destroy();
redirect('home');
}
}