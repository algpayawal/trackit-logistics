<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tracking_Model');
        $this->load->model('Receiving_Model');  # Loads the Branch_Model.php.
	}

	
    # http://localhost/app/branch/receiving
    public function receiving()
	{
		$ext = [
			'css' => [ 'header', 'receiving', 'footer' ],
			'js'  => []
		];

		$tracking_id = uniqid(); # generate the tracking ID using uniqid()

		$data = [
			'sender_first_name'     => $this->input->post('sender_first_name'),
			'sender_last_name'      => $this->input->post('sender_last_name'),
			'consignee_first_name'  => $this->input->post('consignee_first_name'),
			'consignee_last_name'   => $this->input->post('consignee_last_name'),
			'receiving_type'        => $this->input->post('receiving_type')
		];

		$result = $this->Receiving_Model->post_receiving_data($data); # Calls the post_tracking_no() method from the Branch_Model.php.


		$this->load->view('./components/header', $ext);
		$this->load->view('receiving', $ext);
		$this->load->view('./components/footer');
}

}
