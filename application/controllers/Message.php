<?php
class Message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('message');
    }
    public function insert()
    {
        $mani=array(
            'sender'=>$_POST['from'],
            'receiver'=>$_POST['to'],
            'message'=>$_POST['message'],
            'date'=>$_POST['date'],
            'time'=>$_POST['time']
        );
//        print_r($mani);
//        exit();
        $this->load->model('alumni');
        $this->alumni->insert($mani);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');

    }
}