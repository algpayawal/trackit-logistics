<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiving_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); # Loads the database.php.
	}

	public function post_receiving_data($data)
	{
		$required_fields = array('sender_first_name', 'sender_last_name', 'consignee_first_name', 'consignee_last_name', 'receiving_type');
		foreach ($required_fields as $field) {
			if (!isset($data[$field]) || empty($data[$field])) {
				return false; // one of the required fields is empty or not set
			}
		}
	
		$tracking_id = uniqid(); # generate the tracking ID using uniqid()
	
		$data['tracking_id'] = $tracking_id; # add the tracking ID to the $data array
		$data['date_receive'] = date('Y-m-d H:i:s'); # use the current date and time as the value for the 'date_receive' field
	
		$query = $this->db->insert('shipments', $data); # insert the data into the 'shipments' table

		if (!$query) { # Checks if the query is error (this post_tracking_no method returns false).
			$this->db->close();
			return false;
		}
	
		$this->db->close();
	
		return $query; # return the result of the insert operation
	}
	
}