<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); # Loads the database.php.
	}


	public function post_tracking_no($data)
	{
        $query = $this->db->insert('shipments', $data); # Equivalent to "INSERT INTO shipments (tracking_no, receiving_type) VALUES (value1, value2)".

        if(!$query) { # Checks if the query is error (this post_tracking_no method returns false).
            $this->db->close();
            return false;
        }

        $this->db->close();

		return $query;
	}



}