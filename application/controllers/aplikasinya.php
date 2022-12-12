<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasinya extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('tulis_catatan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_catatan()
    {
        $tanggal        = $this->input->post('tanggal');
        $jam            = $this->input->post('jam');
        $lokasi         = $this->input->post('lokasi');
        $suhu           = $this->input->post('suhu');

        $data = array(
            'tanggal'        => $tanggal,
            'jam'            => $jam,
            'lokasi'         => $lokasi,
            'suhu'           => $suhu,
        );
        $this->M_catatan->get_catatan($data, 'catatan');
        $this->session->set_flashdata('message', '<div
			class="alert alert-info alert-dismissible"
			role="alert">
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"><span
				aria-hidden="true">&times;</span></button>
			Selamat! Anda berhasil menambahkan!
			</div>');
        redirect('tampil_catatan');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_userdata(
            'message',
            '<div class="alert alert-success" role="alert">
            You have been logged Out! </div>'
        );

        redirect('aplikasinya');
    }
}
