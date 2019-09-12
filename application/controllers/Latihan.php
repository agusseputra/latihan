<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan extends CI_Controller{
    function __construct()
    { parent :: __construct();
        
    }
    function index(){
        $data['title']="Latihan HTML21";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $data['content']='beranda';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function daftar_peserta(){
        $data['title']="Latihan TAbel";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $data['content']='table';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function register(){
        $data['title']="Register";
        $data['meta']="ini adalah produk untuk Latihan HTML";
        $data['content']='register';
        $data['sidebar']='sidebar';
        $this->load->view('template',$data);
    }
    function save_register(){
        $result['error']=true;
        $this->form_validation->set_rules('nama', '', 'required', array('required' => '<li>Nama harus diisi.</li>'));
        $this->form_validation->set_rules('username', '', 'required', array('required' => '<li>Username harus diisi.</li>'));
        $this->form_validation->set_rules('password', '', 'required', array('required' => '<li>Password  harus diisi.</li>'));
        $this->form_validation->set_rules('jenis_kelamin', '', 'required', array('required' => '<li>Jenis Kelamin  harus diisi.</li>'));
        $this->form_validation->set_rules('agama', '', 'required', array('required' => '<li>Agama  harus diisi.</li>'));
        if ($this->form_validation->run() == FALSE) {
            $result['msg'] = validation_errors();
        } else {
            $result['msg'] = 'Data lengkap';
        }
        echo json_encode($result);
    }
}
