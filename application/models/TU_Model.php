<?php defined('BASEPATH') or exit('No direct script access allowed');

class TU_Model extends CI_Model
{
	private $_table = "tb_tu";

	public $id_admin;
	public $nama_admin;
	public $username_admin;
	public $password;
	public $gambar;


	public function update()
	{
		$id             = $this->db->escape_str($_POST['id_tu']);
		$nama_tu     = $this->db->escape_str($_POST['nama_tu']);

		$sql  		= $this->db->query("SELECT * FROM $this->_table where id_tu='" . $id . "'");
		$data 		= $sql->row_array();

		$data = array(
			'nama_tu' => $nama_tu,
		);

		$this->db->where('id_tu', $id);
		$query = $this->db->update($this->_table, $data);
		return $query;
	}

	public function delete()
	{
		if (isset($_GET['id_tu'])) {
			$id = $_GET['id_tu'];

			$sql2  		= $this->db->query("SELECT * FROM $this->_table where id_tu='" . $id . "'");
			$data2 		=  $sql2->row_array();
			$total		= $sql2->num_rows();

			if ($total == 0) {
				$this->session->set_flashdata('failed', 'Gagal menghapus data');
				redirect('admin/kepalasekolah');
			} else {
				$query = $this->db->delete($this->_table, array("id_admin" => $id));
				if ($query) {
					$this->session->set_flashdata('success', 'Berhasil menghapus data');
					redirect('admin/kepalasekolah');
				} else {
					$this->session->set_flashdata('failed', 'Gagal menghapus data');
					redirect('admin/kepalasekolah');
				}
			}
		}
	}
}
