<?php 

class About extends Controller {
	public function index($nama = 'suryadi', $siswa = 'sekolah', $umur = 17)
	{
		$data['nama'] = $nama; 
		$data['pekerjaan'] = $siswa;
		$data['umur'] = umur;
		$this->view('about/index');
	}
	public function page()
	{
		$this->view('about/page');
	}
}