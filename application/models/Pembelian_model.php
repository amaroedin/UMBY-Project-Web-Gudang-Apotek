<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends Elegant\Model {
	protected $table = 'pembelian';

	function scopeSearch($query, $keyword)
	{
		return $query->where('id_pemasok', $keyword);
	}

	public function Pemasok()
	{
		return $this->belongsTo('Pemasok_model', 'id_pemasok');
	}

	public function User()
	{
		return $this->belongsTo('User_model', 'id_user');
	}
}