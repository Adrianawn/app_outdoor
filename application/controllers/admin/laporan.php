<?php

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
    }
    public function index()
    {
        $data['items'] = $this->model_barang->tampil_data()->result_array();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/laporan', $data);
        $this->load->view('admin/footer');
    }

    public function preview_laporan()
    {
        $type = $this->input->post('type');
        $item = $this->input->post('item');
        $tanggal = $this->input->post('tanggal');
        if ($type == 'items') {
            $data = $this->model_barang->getReport($item, $type);
        } else {
            $data = $this->model_barang->getReport($tanggal, $type);
        }
        echo json_encode($data);
    }

    public function export()
    {
        $type = $this->input->post('type');
        $item = $this->input->post('item');
        $tanggal = $this->input->post('tanggal');
        if ($type == 'items') {
            $data['laporan'] = $this->model_barang->getReport($item, $type);
            $data['judul'] = 'Laporan Transaksi Per Items';
        } else {
            $data['judul'] = 'Laporan Transaksi Per Tanggal';
            $data['laporan'] = $this->model_barang->getReport($tanggal, $type);
        }
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan-transaksi.pdf";
        $this->pdf->load_view('admin/viewpdf', $data);
    }

    public function coba()
    {
        $data['laporan'] = $this->model_barang->getReport(2, 'items');
        $this->load->view('admin/viewpdf', $data);
    }
}
