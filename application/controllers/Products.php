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


	function remove($id = null) {
		if ( ! is_null($id)) {
			$remove = $this->product->removeProductById($id);

			if ($remove > 0) 
				redirect(site_url());
		}
	}
}