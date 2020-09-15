<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

    }
    
    public function index()
    {
        
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        
        $data['member'] = $this->db->get_where('user', ['role_id' => 2, 'is_active' => 1])->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }
    
    public function resetpassword($id)
    {
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array(); 
        $data['warning'] = $data['user']['name'];

        $this->session->set_userdata($data['warning']);

        $password = 12345;
        $password_hash = password_hash( $password, PASSWORD_DEFAULT);

        $this->db->where('id', $id);
        $this->db->update('user', ['password' => $password_hash]);

        $this->session->set_flashdata('message', $data['user']['name']);
        redirect('admin');
    }
}
