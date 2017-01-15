<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends Elegant\Model {
	protected $table = 'user';

	function scopeSearch($query, $keyword)
	{
		return $query->like('nama', $keyword);
	}

	public function Grup()
	{
		return $this->belongsTo('User_grup_model', 'id_grup');
	}

	public function Status()
	{
		return $this->belongsTo('Status_model', 'id_status');
	}
}