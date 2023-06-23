<?php
class Studentlogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('studentlogin');
    }
    public function login()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $this->load->model('alumni');
      $rrr=$this->alumni->login($username,$password);
        if ($rrr[0]['password']== $password)
        {
            $_SESSION['email'] = $rrr[0]['email'];
//            print_r($_SESSION['email']);
//            exit();
            echo '<script>alert("Login Success!!");window.location.replace("' . base_url() . 'eventtable")</script>';
        }
        else
        {
            echo '<script>alert("please check password!!");window.location.replace("' . base_url() . 'studentlogin")</script>';
        }


    }
}