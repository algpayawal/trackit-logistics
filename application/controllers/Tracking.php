<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tracking_Model'); # Loads the Tracking_Model.php.
	}



	# http://localhost/app/
	public function index()
	{
		$ext = [
			'css' => [ 'home', 'sweetalert' ],
			'js'  => [ ]
		];

		$result = $this->Tracking_Model->get_tracking_data(); # Calls the get_tracking_data() method from the Tracking_Model.php.

		$data = [ 'result' => $result ];

		$this->load->view('./components/header', $ext);
		$this->load->view('home', $data);
		$this->load->view('./components/footer');
	}


	# http://localhost/app/tracking/data/
	public function data()
	{
        $response = [
            'status'  => 'OK',
            'message' => 'Hello World'
        ];

        echo json_encode($response);
	}



}
