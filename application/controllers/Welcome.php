<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$ketemu=$this->db->get('tbl_user')->row_array();
		if ($ketemu >0) {
			redirect('welcome/beranda');
		}else {
			redirect('Welcome/');
		}
	}
	public function Beranda()
	{
		$this->load->view('beranda');
	}
	public function barang()
	{
		$this->load->model('Modeldata');
		$data['data_barang']		=$this->Modeldata->data_barang();
		$this->load->view('beranda',$data);
	}
	public function customer()
	{
		$this->load->model('Modeldata');
		$data['data_customer']		=$this->Modeldata->data_customer();
		$this->load->view('beranda',$data);
	}
	public function transaksi()
	{
		$this->load->view('beranda');
	}
	public function user()
	{
		$this->load->model('Modeldata');
		$data['data_user']		=$this->Modeldata->data_user();
		$this->load->view('beranda',$data);
	}
	public function simpanbarang()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->simpan_barang();
		redirect('Welcome/Barang');
	}
	public function simpanuser()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->simpan_user();
		redirect('Welcome/User');
	}
	public function simpancustomer()
	{
		$this->load->model('Modeldata');
		$simpan=$this->Modeldata->simpan_customer();
		redirect('Welcome/Customer');
	}
	public function Getidbarang($id)
	{
		$this->load->model('Modeldata');
		$data=$this->Modeldata->get_id_barang($id);
		echo json_encode($data);
	}
	public function Hapusbarang()
	{
		$this->load->model('Modeldata');
		$hapus=$this->Modeldata->Hapus_barang();
		redirect('Welcome/Barang');
	}
}