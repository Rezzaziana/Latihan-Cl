<?php
class Matakuliah extends Ci_Controller
{

	public function index()

	{
		$this->load->view('view-form-matakuliah');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('kode','Kode matakuliah','required|min_length[3]', [
				'required' => 'Kode Matakuliah Harus diisi',
				'min_length' => 'Kode Terlalu Pendek'
		]);

		$this->form_validation->set_rules('nama','Nama matakuliah','required|min_length[3]', [
				'required' => 'Nama Matakuliah Harus diisi',
				'min_length' => 'Nama Terlalu Pendek'
		]);

		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-matakuliah');
		} else {
			$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'sks' => $this->input->post('sks')
		];

		$this->load->view('view-data-matakuliah', $data);
		}
	}

}