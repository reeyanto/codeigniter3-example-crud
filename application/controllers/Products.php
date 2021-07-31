<?php
defined('BASEPATH') or exit('No direct script access allowed!');

class Products extends CI_Controller {

	function __construct() {
		parent::__construct();

		// panggil model bernama products model dengan alias bernama product
		$this->load->model('ProductsModel', 'product');
	}


	function index() {
		// tampung hasil kembalian dari model product
		$data['products'] = $this->product->getAllProducts();	

		// kirim ke view
		$this->load->view('product_lists', $data);
	}


	function add() {
		// 1 method ini punya 2 fungsi, 1 untuk menampilkan form, 1 lagi untuk proses tambah data
		if ($this->input->post('submit')) {
			$data = [
				'name'			=> $this->input->post('name'),
				'description' 	=> $this->input->post('description'),
				'price'			=> $this->input->post('price')

			];

			$add = $this->product->addProduct($data);

			if ($add > 0)
				redirect(site_url());
		}

		$this->load->view('product_add_form');
	}


	function remove($id = null) {
		if ( ! is_null($id)) {
			$remove = $this->product->removeProductById($id);

			if ($remove > 0) 
				redirect(site_url());
		}
	}
}