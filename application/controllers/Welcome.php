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
		$this->load->view('welcome_message');
	}

	public function testAPI()
	{	

		//global positif

		$readAPIGlobPos = file_get_contents('https://api.kawalcorona.com/positif');
		$data['globalPos'] = json_decode($readAPIGlobPos, true);

		//global sembuh

		$readAPIGlobSemb = file_get_contents('https://api.kawalcorona.com/sembuh');
		$data['globalSemb'] = json_decode($readAPIGlobSemb, true);

		//global meninggal

		$readAPIGlobMeni = file_get_contents('https://api.kawalcorona.com/meninggal');
		$data['globalMeni'] = json_decode($readAPIGlobMeni, true);

		$readAPIGlob = file_get_contents('https://api.kawalcorona.com/');
		$data['global'] = json_decode($readAPIGlob, true);

		//indonesia

		$readAPIIndo = file_get_contents('https://api.kawalcorona.com/indonesia');
		$data['indonesia'] = json_decode($readAPIIndo, true);

		//provinsi

		$readAPIProv = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
		$data['provinsi'] = json_decode($readAPIProv, true);

		$this->load->view('covid/index', $data);
		
		// echo "<pre>";
		// print_r($data);

		//return $data;
	}

}
