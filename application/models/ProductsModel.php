<?php 
defined('BASEPATH') or exit('No direct script access allowed!');

class ProductsModel extends CI_Model {

	function getAllProducts() {
		// ambil semua data dari tabel products
		$query = $this->db->get('products');

		// kembalikan hasilnya berupa objek
		return $query->result_object();
	}
}