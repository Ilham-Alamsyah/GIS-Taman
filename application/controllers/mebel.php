<?php

class Mebel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mebel');
    }

    public function index()
    {
        $data = array(
            'mebel' => $this->m_mebel->tampil(),
            'title' => 'Data Taman Bandung',
            'isi' => 'data'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function input()
    { {

            $this->form_validation->set_rules('nama', 'Nama', 'required', array(
                'required' => '%s Harus Diisi!!!'
            ));

            $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
                'required' => '%s Harus Diisi!!!'
            ));

            $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
                'required' => '%s Harus Diisi!!!'
            ));

            $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
                'required' => '%s Harus Diisi!!!'
            ));

            $this->form_validation->set_rules('ket', 'Keterangan', 'required', array(
                'required' => '%s Harus Diisi!!!'
            ));

            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'title' => 'Input Data Taman Bandung',
                    'isi' => 'input_data'
                );
                $this->load->view('layout/v_wrapper', $data, FALSE);
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'latitude' => $this->input->post('latitude'),
                    'longitude' => $this->input->post('longitude'),
                    'ket' => $this->input->post('ket'),
                );
                $this->m_mebel->simpan($data);
                $this->session->set_flashdata('pesan', 'Berhasil Disimpan');
                redirect('mebel/input');
            }
        }

        $data = array(
            'title' => 'Data Lokasi Taman Bandung',
            'isi' => 'input_data'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));

        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));

        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));

        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));

        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array(
            'required' => '%s Harus Diisi!!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Taman',
                'mebel' => $this->m_mebel->detail($id),
                'isi' => 'edit_data'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'ket' => $this->input->post('ket'),
            );
            $this->m_mebel->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!');
            redirect('mebel');
        }
    }

    public function hapus($id)
    {
        $data = array('id' => $id);
        $this->m_mebel->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!!');
        redirect('mebel');
    }
}
