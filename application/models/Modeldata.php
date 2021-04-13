<?php
class Modeldata extends CI_Model {
	public function data_barang()
	{
		return $this->db->get('t_barang')->result();
	}
	public function data_customer()
	{
		return $this->db->get('t_customer')->result();
	}
	public function data_user()
	{
		return $this->db->get('t_user')->result();
	}
	public function simpan_barang()
	{
		$isidata=array(
			'nama_barang'	=>$this->input->post('nama_barang',TRUE),
			'harga'	=>$this->input->post('harga',TRUE),
			'stock'	=>$this->input->post('stock',TRUE),
			'keterangan'	=>$this->input->post('keterangan',TRUE),
		);
		return $this->db->insert('t_barang',$isidata);
	}
	public function simpan_user()
	{
		$isidata=array(
			'nama'	=>$this->input->post('nama',TRUE),
			'username'	=>$this->input->post('username',TRUE),
			'password'	=>$this->input->post('password',TRUE),
		);
		return $this->db->insert('t_user',$isidata);
	}
	public function simpan_customer()
	{
		$isidata=array(
			'nama'	=>$this->input->post('nama',TRUE),
			'alamat'	=>$this->input->post('alamat',TRUE),
			'jk'	=>$this->input->post('jk',TRUE),
			'no_telepon'	=>$this->input->post('no_telepon',TRUE),
			'keterangan'	=>$this->input->post('keterangan',TRUE),
		);
		return $this->db->insert('t_customer',$isidata);
	}
	public function get_id_barang($id)
	{
		$this->db->where('id_barang',$id);
		return $this->db->get('t_barang')->row();
	}
	public function Hapus_barang()
	{
		$idbarang=$this->input->post('id_barang',TRUE);
		$this->db->where('id_barang',$idbarang);
		$this->db->delete('t_barang');
	}
}