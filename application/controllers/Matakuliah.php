<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function index()
	{
		$data['isi'] = 'matakuliah/tabel';
		$data['data'] = $this->db->get('matakuliah')->result();

		$this->load->view('matakuliah/template', $data);
	}

	public function tambah()
	{
		$data['isi'] = 'matakuliah/tambah';

		$this->load->view('matakuliah/template', $data);
	}

	public function aksi_tambah()
	{
        $this->form_validation->set_rules('nama', 'Nama MK', 'required');
        $this->form_validation->set_rules('kodemk', 'Kode MK', 'required');
        $this->form_validation->set_rules('jumlahsks', 'Jumlah SKS', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['isi'] = 'matakuliah/tambah';

			$this->load->view('matakuliah/template', $data);
        } else {
			$this->db->insert('matakuliah', [
				'nama' => $this->input->post('nama'),
				'kodemk' => $this->input->post('kodemk'),
				'jumlahsks' => $this->input->post('jumlahsks'),
			]);

			redirect(base_url() . 'matakuliah');
        }
	}

	public function ubah($id)
	{
		$data['isi'] = 'matakuliah/ubah';
		$data['data'] = $this->db->get_where('matakuliah', [
			'id' => $id,
		])->row();
		$data['validation'] = false;

		$this->load->view('matakuliah/template', $data);
	}

	public function aksi_ubah()
	{
        $this->form_validation->set_rules('nama', 'Nama MK', 'required');
        $this->form_validation->set_rules('kodemk', 'Kode MK', 'required');
        $this->form_validation->set_rules('jumlahsks', 'Jumlah SKS', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['isi'] = 'matakuliah/ubah';
			$data['data'] = $this->db->get_where('matakuliah', [
				'id' => $this->input->post('id'),
			])->row();
			$data['validation'] = true;

			$this->load->view('matakuliah/template', $data);
        } else {
			$this->db->update('matakuliah', [
				'nama' => $this->input->post('nama'),
				'kodemk' => $this->input->post('kodemk'),
				'jumlahsks' => $this->input->post('jumlahsks'),
			], [
				'id' => $this->input->post('id'),
			]);

			redirect(base_url() . 'matakuliah');
        }
	}

	public function aksi_hapus($id)
	{
		$this->db->delete('matakuliah', [
			'id' => $id,
		]);

		redirect(base_url() . 'matakuliah');
	}
}
