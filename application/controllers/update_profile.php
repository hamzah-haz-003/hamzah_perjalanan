
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_profile extends CI_Controller
{

    public function update_profile($id)
    {
        $where      = array('id' => $id);
        $email    = $this->input->post('email');
        $name        = $this->input->post('name');


        $data = array(
            'email'   => $email,
            'name'       => $name,

        );
        $where = array(
            'id' => $id
        );
        $this->M_catatan->update_profile($where, $data, 'user');
        $this->session->set_flashdata('message', '<div
                class="alert alert-info alert-dismissible"
                role="alert">
                <button type="button" class="close"
                    data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                Data Berhasil Diupdate!
                </div>');
        redirect('tampil_catatan');
    }
}
