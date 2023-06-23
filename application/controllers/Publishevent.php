<?php
class Publishevent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('publishevent');
    }
    public function event()
    {
        $naveen=array(
        'eventid'=>$_POST['eventid'],
        'title'=>$_POST['title'],
        'description'=>$_POST['description'],
            'location'=>$_POST['location'],
            'date'=>$_POST['eventdate'],
            'time'=>$_POST['time'],
            'status'=>$_POST['status'],
            );

        $this->load->model('alumni');
        $this->alumni->event($naveen);
    }
}