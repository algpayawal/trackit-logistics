<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking_Model extends CI_Model {



	public function __construct()
	{
		parent::__construct();
		$this->load->database(); # Loads the database.php.
	}



	public function get_tracking_data()
	{
        $query = $this->db->get('shipments'); # Equivalent to "SELECT * FROM shipments".

        if(!$query || $query->num_rows() == 0) { # Checks if the query is error or no record (this get_tracking_data method returns null).
            $this->db->close();
            return null;
        }

        $result = $query->result();
        $query->free_result();

        $this->db->close();

        return $result; # Return the table record rows.
	}



}