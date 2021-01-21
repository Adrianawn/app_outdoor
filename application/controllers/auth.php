<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_barang');
        $this->load->library('cart', 'session');
    }


    public function login()
    {
        $this->cart->destroy();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_form');
            $this->load->view('admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $cek = $this->model_barang->cek_login($username, $password);

            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Username atau Password Salah !. <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('role_id', $cek->role_id);
                $this->session->set_userdata('nama', $cek->nama);
                $this->session->set_userdata('alamat', $cek->alamat);
                $this->session->set_userdata('id_customer', $cek->id_customer);

                switch ($cek->role_id) {
                    case 1:
                        redirect('admin/dashboard');
                        break;
                    case 2:
                        redirect('dashboard/welcome');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('dashboard');
    }

    public function ganti_password()
    {
        $this->load->view('ganti_password');
        $this->load->view('admin/footer');
    }

    public function ganti_password_aksi()
    {
        $pass_baru  = $this->input->post('pass_baru');
        $ulang_pass = $this->input->post('ulang_pass');

        $this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[pass_baru]');
        $this->form_validation->set_rules('ulang_pass', 'Ulangi Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ganti_password');
            $this->load->view('admin/footer');
        } else {
            $data   = array('password' => md5($pass_baru));
            $id     = array('id_customer' => $this->session->userdata('id_customer'));

            $this->model_barang->update_password($id, $data, 'customer');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Password Berhasil Diupdate, Silahkan Login !. <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>');
            redirect('auth/login');
        }
    }
}
