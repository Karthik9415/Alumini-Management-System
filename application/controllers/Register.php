<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('register');
    }
    public function student()
    {
        $file_name=$_FILES['image']['name'];
        $tmp_name=$_FILES['image']['tmp_name'];
        $pandi=array(
            'name'=>$_POST['name'],
            'address'=>$_POST['address'],
            'registerno'=>$_POST['registerno'],
            'joindate'=>$_POST['joindate'],
            'username'=>$_POST['username'],
            'password'=>$_POST['password'],
            'email'=>$_POST['email'],
            'dob'=>$_POST['dob'],
            'contact'=>$_POST['contact'],
            'gender'=>$_POST['gender'],
            'qualification'=>$_POST['qualification'],
            'worksat'=>$_POST['workat'],
            'description'=>$_POST['description'],
            'image'=> $file_name,
            'year'=>$_POST['year'],

        );
        $this->load->model('alumni');
      $ddd=$this->alumni->student($pandi);


        if($ddd)
        {
            move_uploaded_file($tmp_name,'images/images'.$file_name);
            echo '<script>alert("paper successfully added!!");window.location.replace("'.base_url().'studentlogin")</script>';
        }
        else{
            echo '<script>alert("paper not added!!");window.location.replace("' . base_url() .'register")</script>';
        }

    }
}