<?php

class Transaksi extends CI_Controller
{

    public function index()
    {
        $data['transaksi'] = $this->db->query("SELECT * FROM tb_transaksi tr, tb_barang brg, customer cs WHERE tr.id_brg=brg.id_brg AND tr.id_customer=cs.id_customer")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('admin/footer');
    }
}
