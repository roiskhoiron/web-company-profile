<?php

defined('BASEPATH') OR exit('NO direct script access allowed');

class Products extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index() {
        $data["products"] = $this->product_model->getByStatus();
        $this->load->view("main/overview", $data);
    }
    
    public function add() {
        $product = $this->product_model; // penggunaan objek model
        $validation = $this->form_validation; // pemanggilan form validator
        $validation->set_rules($product->rules()); //  menerapkan rule pad format input

        if ($validation->run()) { // pemvalidasian dimulai
            $product->save(); // simpan data ke database
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // pesan operasi tambah berhasil
        }

        header("Location: http://192.168.1.8/pmtdev/");
    }

    public function edit($id = null) { // id dari nilai parameter awalnya bernilai null namun mutable seketika pemanggilan function
        if (!isset($id)) redirect('main/products'); // pengecekan ulang id, jika masih bernilai null akan ditunjukkan view products

        $product = $this->product_model; 
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'berhasil disimpan');
        }

        $data["product"] = $product->getbyId($id); // mengambil data terbaru untuk di load ulang diform edit tsb
        if (!$data["product"]) show_404(); // jikda data tidak ada, akan tampil error 404

        $this->load->view("main/_partials/edit_form", $data);// memperbarui data pada form edit
    }

    public function delete($id=null) {
        if (!isset($id)) show_404();

        if ($this->product_model->delete($id)) {
            redirect(site_url('main/products'));
        }
    }

    
}