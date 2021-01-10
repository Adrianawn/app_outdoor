<?php

class Model_barang extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function tampil_data()
    {
        return $this->db->get('tb_barang');
    }

    public function tampil()
    {
        return $this->db->get('tb_barang', 9);
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function ambil_id_barang($id)
    {
        $hasil = $this->db->where('id_brg', $id)->get('tb_barang');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function ambil_id_customer($id)
    {
        $hasil = $this->db->where('id_customer', $id)->get('customer');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
            ->limit(1)
            ->get('tb_barang');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_customer($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function detail_customer($id_customer)
    {
        $result = $this->db->where('id_customer', $id_customer)->get('customer');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function data_promo()
    {
        $query = $this->db->get_where("tb_barang", array('kategori' => 'promo'));
        return $query->result();
    }

    public function data_bundle()
    {
        $query = $this->db->get_where("tb_barang", array('kategori' => 'bundle'));
        return $query->result();
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('customer');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function data_customer()
    {
        $query = $this->db->get_where("customer", array('role_id' => '2'));
        return $query->result();
    }

    public function update_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
