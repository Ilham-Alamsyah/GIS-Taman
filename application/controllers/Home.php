<?php

class Home extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Pemetaan',
            'mebel' => $this->m_mebel->tampil(),

            'isi' => 'pemetaan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mebel');
    }
}

/* End of file Controllername.php */