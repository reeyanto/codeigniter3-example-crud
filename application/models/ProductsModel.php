<?php 
defined('BASEPATH') or exit('No direct script access allowed!');

class ProductsModel extends CI_Model {

	function getAllProducts() {
		// ambil semua data dari tabel products
		$query = $this->db->get('products');

		// kembalikan hasilnya berupa objek
		return $query->result_object();
	}


	function getProductById($id) {
		$this->db->where(['id' => $id]);
		$query = $this->db->get('products');
		return $query->row_object();
	}


	function addProduct($data) {
		$this->db->insert('products', $data);

		return $this->db->affected_rows();
	}


	function updateProduct($data, $id) {
		// atur data apa yang akan diubah
		$this->db->set($data);

		// berdasarkan apa
		$this->db->where(['id' => $id]);

		// pada tabel apa
		$this->db->update('products');

		// kembalikan hasil berupa jumlah baris yang berhasil diupdate
		return $this->db->affected_rows();
	}


	function removeProductById($id) {
		// hapus data dari tabel product dimana id-nya = $id
		$this->db->where(['id' => $id]);
		$this->db->delete('products');

		// kembalikan hasilnya berupa baris data yang berhasil dihapus
		return $this->db->affected_rows();
	}
}