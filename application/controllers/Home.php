<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $urlAPI = 'https://api.kawalcorona.com';

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// public function delcache($value='')
	// {
	// 	$this->output->delete_cache('home');
	// }

	// List all your items
	public function index( $offset = 0 )
	{
		//$this->output->cache(60);
		$data['globalPos'] = $this->readAPI('positif');
		$data['globalSemb'] = $this->readAPI('sembuh');
		$data['globalMeni'] = $this->readAPI('meninggal');
		$data['global'] = $this->readAPI();
		$indonesia = $this->readAPI('indonesia');
		$indo = [];

		foreach ($indonesia as $value) {
			
			$indo = [

				'positif' => $value['positif'],
				'sembuh' => $value['sembuh'],
				'meninggal' => $value['meninggal'],

			];
		}

		$data['indonesia'] = $indo;

		$data['provinsi'] = $this->readAPI('provinsi');
		$data['singleProvince'] = $this->getSingleProvince(17);

		$this->load->view('covid/home', $data);


	}

	public function getSingleProvince($FID='')
	{

		$data = $this->readAPI('provinsi');

		$result = [];

		if (empty($FID)) {
			
			$FID = 14;

		
		} else {
			
			$FID = $FID;		
		}
			
		foreach ($data as $value) {
			
			if ($value['attributes']['FID'] == $FID) {
				
				$result = [

					'provinsi' => $value['attributes']['Provinsi'],
					'positif' => $value['attributes']['Kasus_Posi'],
					'sembuh' => $value['attributes']['Kasus_Semb'],
					'meninggal' => $value['attributes']['Kasus_Meni'],


				];

			return $result; 
			
			}

			
			
		}

		$result = [

					'provinsi' => 'N/A',
					'positif' => 'N/A',
					'sembuh' => 'N/A',
					'meninggal' => 'N/A',


				];


		return $result;


	}

	public function readAPI($url='')
	{

		$url = strtolower($url);

		$maskUrl = [

			'indonesia' => '/indonesia',
			'provinsi' => '/indonesia/provinsi',
			'positif' => '/positif',
			'sembuh' => '/sembuh',
			'meninggal' => '/meninggal',

		];

		$generateUrl = strtr($url, $maskUrl);

		if (empty($url) or !array_key_exists($url, $maskUrl)) {
			
			$readUrl = file_get_contents($this->urlAPI);
		
		} else {

			$readUrl = file_get_contents($this->urlAPI.$generateUrl);
		}
		

		$data = json_decode($readUrl, true);

		return $data;

	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
