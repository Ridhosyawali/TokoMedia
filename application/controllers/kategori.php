<?php

class Kategori extends CI_Controller{
    public function alat_musik()
    {
        $data['alat_musik']= $this->model_kategori->data_alat_musik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_musik',$data);
        $this->load->view('templates/footer');
    }

    public function alat_olahraga()
    {
        $data['alat_olahraga']= $this->model_kategori->data_alat_olahraga()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_olahraga',$data);
        $this->load->view('templates/footer');
    }

    public function alat_tulis()
    {
        $data['alat_tulis']= $this->model_kategori->data_alat_tulis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('alat_tulis',$data);
        $this->load->view('templates/footer');
    }

    public function buku()
    {
        $data['buku']= $this->model_kategori->data_buku()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('buku',$data);
        $this->load->view('templates/footer');
    }

    public function tas()
    {
        $data['tas']= $this->model_kategori->data_tas()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tas',$data);
        $this->load->view('templates/footer');
    }
}