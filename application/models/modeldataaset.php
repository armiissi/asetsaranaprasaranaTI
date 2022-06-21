<?php

class modeldataaset extends CI_Model
{
    public function tampildata()
    {
        $this->db->select('kebutuhan_data.*');
        $this->db->from('kebutuhan_data');
        $this->db->where('kebutuhan_data.user', $this->session->userdata('id'));

        return $this->db->get()->result();
    }

    // public function tampildata()
    // {
    //     return $this->db->get('kebutuhan_data');
    // }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editdata($where, $table)
    {
        return $this->db->get_where($table, $where, $this->session->userdata('id'));
    }
    public function updatedata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapusdata($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detaildata($Nomor = null)
    {
        $query = $this->db->get_where('kebutuhan_data', array('Nomor' => $Nomor))->row();
        return $query;
    }
}
