<?php
class Mahasiswa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('forminput');
    }
    public function proses()
    {
      $data =[
        'nim'=> $this->input->post('nim'),
        'nama'=> $this->input->post('nama'),
        'prodi'=> $this->input->post('prodi'),
    ];
    $this->load->view('Formoutput', $data);  
    }
}