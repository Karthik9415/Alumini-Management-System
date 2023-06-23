<?php
class Alumni extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function admin($adminname,$password)
    {
        $sql="select * from admin where username='$adminname' and password='$password'";
        $eee=$this->db->query($sql);
        return  $ddd=$eee->num_rows();
    }

    public function add($gowtham)
    {
        $ver = "select * from staff where email='" . $gowtham['email'] . "'";
        $query = $this->db->query($ver);
        $gms = $query->num_rows();
        if ($gms == 0) {
            $this->db->insert('staff', $gowtham);
            echo '<script>alert("Add Success!!");window.location.replace("' . base_url() . 'addstaff")</script>';
        }
        else
            {
            echo '<script>alert("already exists!!");window.location.replace("' . base_url() . 'addstaff")</script>';
        }

    }

    public function event($naveen)
    {
        $ver = "select * from event where title='" . $naveen['title'] . "' and date='".$naveen['date']."'";
        $query = $this->db->query($ver);
        $gms = $query->num_rows();
        if ($gms == 0) {
            $this->db->insert('event', $naveen);
            echo '<script>alert("Add event Success!!");window.location.replace("' . base_url() . 'addstaff")</script>';
        } else {
            echo '<script>alert("already exists!!");window.location.replace("' . base_url() . 'addstaff")</script>';
        }
    }
    public function student($pandi)
    {
        $sql="select * from student where image='" . $pandi['image'] . "' and email='".$pandi['email']."'";
//       print_r($sql);
//       exit();
        $sss=$this->db->query($sql);
        $ttt=$sss->num_rows();
        if($ttt==0) {
            return $this->db->insert('student', $pandi);
            echo '<script>alert("Student  Add Successfully");window.location.replace("' . base_url() . 'studentlogin")</script>';
        }
        else{
            echo '<script>alert("Already exists ");window.location.replace("' . base_url() . 'register")</script>';

        }

    }
    public function table($search)
    {
        $sql="select * from student where name='$search' or email='$search' or address='$search' or qualification='$search'";
        $ddd=$this->db->query($sql);
       return $ddd->result_array();
    }
    public function login($username,$password)
    {
        $sql="select * from student where username='$username' and password='$password'";
        $aaa=$this->db->query($sql);
        $fff=$aaa->num_rows();
        if($fff==1)
        {
            $sql="select * from student where username='$username' and password='$password'";
            $sss=$this->db->query($sql);
            return  $ddd=$sss->result_array();
        }



    }

    public function tab()
    {
        $sql="select * from event";
        $yyy=$this->db->query($sql);
        return $yyy->result_array();

    }
    public function insert($mani)
    {
        $this->db->insert('message',$mani);
        echo '<script>alert("messgae send successfully");window.location.replace("'.base_url().'message")</script>';
    }
    public function inbox($gm)
    {
        $sql="select * from message where receiver='$gm'";
        $fff=$this->db->query($sql);
//        print_r($fff);
//        exit();
        return $fff->result_array();
    }
    }