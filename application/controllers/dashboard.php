<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_barang');
        $this->load->library('cart', 'session');
    }

    public function index()
    {
        $data['barang']     = $this->Model_barang->tampil()->result();
        $data['promo']      = $this->Model_barang->data_promo();
        $data['bundle']     = $this->Model_barang->data_bundle();
        $this->load->view('user/header');
        $this->load->view('user/dashboard', $data);
        $this->load->view('user/footer');
    }

    public function produk()
    {
        $data['barang'] = $this->Model_barang->tampil_data()->result();
        $this->load->view('user/header');
        $this->load->view('user/produk', $data);
        $this->load->view('user/footer');
    }

    public function tambah_ke_keranjang()
    {
        $id = $this->input->post('id');
        $barang = $this->Model_barang->find($id);

        $data = array(
            'id'                    => $barang->id_brg,
            'qty'                   => 1,
            'price'                 => $barang->harga,
            'name'                  => $barang->nama_brg
        );

        $this->cart->insert($data);
        $this->session->set_flashdata('asd');
        redirect('dashboard');
    }

    public function tambah_ke_promo()
    {
        $id = $this->input->post('id');
        $barang = $this->Model_barang->find($id);


        $data = array(
            'id'                    => $barang->id_brg,
            'qty'                   => 1,
            'price'                 => $barang->promo,
            'name'                  => $barang->nama_brg
        );

        $this->cart->insert($data);
        $this->session->set_flashdata('asd');
        redirect('dashboard');
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->Model_barang->detail_brg($id_brg);
        $this->load->view('user/header');
        $this->load->view('user/detail_barang', $data);
        $this->load->view('user/footer');
    }

    public function detail_promo($id_brg)
    {
        $data['barang'] = $this->Model_barang->detail_brg($id_brg);
        $this->load->view('user/header');
        $this->load->view('user/detail_promo', $data);
        $this->load->view('user/footer');
    }

    public function detail_keranjang()
    {
        $this->load->view('user/header');
        $this->load->view('user/keranjang');
        $this->load->view('user/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('user/header');
        $this->load->view('user/pembayaran');
        $this->load->view('user/footer');
    }

    public function proses_pesanan()
    {
        $this->cart->destroy();
        $this->load->view('user/header');
        $this->load->view('user/proses_pesanan');
        $this->load->view('user/footer');
    }

    public function about_renting()
    {
        $this->load->view('user/header');
        $this->load->view('user/about_renting');
        $this->load->view('user/footer');
    }

    public function about_us()
    {
        $this->load->view('user/header');
        $this->load->view('user/about_us');
        $this->load->view('user/footer');
    }

    public function privacy_policy()
    {
        $this->load->view('user/header');
        $this->load->view('user/privacy_policy');
        $this->load->view('user/footer');
    }

    public function terms_condition()
    {
        $this->load->view('user/header');
        $this->load->view('user/terms_condition');
        $this->load->view('user/footer');
    }

    public function profile()
    {
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/profile');
        $this->load->view('user/footer');
    }

    public function detail_customer($id)
    {
        $data['detail'] = $this->model_barang->ambil_id_customer($id);
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/profile', $data);
        $this->load->view('user/footer');
    }
}
