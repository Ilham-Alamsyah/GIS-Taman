<?php

class M_mebel extends CI_Model
{

    public function simpan($data)
    {
        $this->db->insert('tbl_taman', $data);
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_taman');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_taman');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_taman', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_taman', $data);
    }
}

/* End of file ModelName.php */
