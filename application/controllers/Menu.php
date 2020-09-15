<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('templates/footer');
    }

    public function changeActive() 
    {
        $user_id = $this->input->post('userId');

        $result = $this->db->get_where('user', ['id' => $user_id])->row_array();

            if ($result['is_active'] == 0) {
                $this->db->where('id', $user_id);
                $this->db->update('user', ['is_active' => 1]);
            } else {
                $this->db->where('id', $user_id);
                $this->db->update('user', ['is_active' => 0]);
            }
    }

    public function delete($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User has been deleted!</div>');
        redirect('menu/');
    }
}