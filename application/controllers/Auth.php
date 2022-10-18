<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }
    public function visi_misi()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('visi_misi');
        $this->load->view('templates/footer');
    }
    public function civitas()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('civitas');
        $this->load->view('templates/footer');
    }
    public function motto()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('motto');
        $this->load->view('templates/footer');
    }
    public function kompetensi()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('kompetensi');
        $this->load->view('templates/footer');
    }
    public function fasilitas()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('fasilitas');
        $this->load->view('templates/footer');
    }
    public function pricing()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pricing');
        $this->load->view('templates/footer');
    }
    public function berita()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('berita');
        $this->load->view('templates/footer');
    }
    public function contact()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}
