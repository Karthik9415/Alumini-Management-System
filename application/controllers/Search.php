<?php
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('search');
    }
    public function table()
    {
        $search=$_POST['search'];
        $this->load->model('alumni');
        $kkk['cats']=$this->alumni->table($search);
        $this->load->view('search1',$kkk);
    }
}