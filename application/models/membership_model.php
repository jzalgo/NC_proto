<?php

class Membership_model extends CI_Model {

	function validate($us = NULL , $pass = NULL)
	{
		$this->db->where('ac_username', $us);
		$this->db->where('ac_password', $pass);
		$query = $this->db->get('account');

		if($query->num_rows() == 1)
		{
			return true;
		}
		return FALSE;
	}


}
