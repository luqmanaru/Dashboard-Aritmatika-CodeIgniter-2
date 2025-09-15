<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
    }
    
    public function index()
    {
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('menu_aritmatika');
        $this->load->view('template/footer');
    }
    
    public function penjumlahan()
    {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        $data['hasil'] = $data['d1'] + $data['d2'];
        
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('penjumlahan', $data);
        $this->load->view('template/footer');
    }
    
    public function pengurangan()
    {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        $data['hasil'] = $data['d1'] - $data['d2'];
        
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pengurangan', $data);
        $this->load->view('template/footer');
    }
    
    public function perkalian()
    {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        $data['hasil'] = $data['d1'] * $data['d2'];
        
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('perkalian', $data);
        $this->load->view('template/footer');
    }
    
    public function pembagian()
    {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        
        if ($data['d2'] != 0) {
            $data['hasil'] = $data['d1'] / $data['d2'];
        } else {
            $data['hasil'] = 'Pembagian dengan nol tidak valid';
        }
        
        $this->load->view('template/head');
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('pembagian', $data);
        $this->load->view('template/footer');
    }
}
?>
