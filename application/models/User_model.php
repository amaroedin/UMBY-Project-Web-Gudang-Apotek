<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends Elegant\Model {
	protected $table = 'user';

	function grup()
	{
		return $this->belongsTo('User_grup_model', 'id_grup');
	}

	function status()
	{
		return $this->belongsTo('Status_model', 'id_status');
	}
}