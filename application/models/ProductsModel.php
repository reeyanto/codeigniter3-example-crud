<?php 
defined('BASEPATH') or exit('No direct script access allowed!');

class ProductsModel extends CI_Model {

	function getAllProducts() {
		// ambil semua data dari tabel products
		$query = $this->db->get('products');

		// kembalikan hasilnya berupa objek
		return $query->result_object();
	}


	function removeProductById($id) {
		// hapus data dari tabel product dimana id-nya = $id
		$this->db->where(['id' => $id]);
		$this->db->delete('products');

		// kembalikan hasilnya berupa baris data yang berhasil dihapus
		return $this->db->affected_rows();
	}
}