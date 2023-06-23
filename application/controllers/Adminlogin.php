<?php
class Adminlogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('adminlogin');
    }
    public function admin()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
//        print_r($password);
//        exit();
        $this->load->model('alumni');
      $ddd= $this->alumni->admin($username,$password);
//      print_r($ddd);
//      exit();
        if($ddd==1)
        {
            $_SESSION['username']=$username;
            echo '<script>alert("login successfully...!");window.location.replace("'.base_url().'addstaff")</script>';
        }
        else
        {
            echo '<script>alert("login failed...!");window.location.replace("'.base_url().'adminlogin")</script>';

        }
    }
}