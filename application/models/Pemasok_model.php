<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasok_model extends Elegant\Model {
	protected $table = 'pemasok';

	function scopeSearch($query, $keyword)
	{
		return $query->like('nama', $keyword)
					->or_like('email', $keyword)
					->or_like('kontak_person', $keyword);
	}

	public function get_options()
	{
		$data = $this->all()->toArray();
		$options[''] = 'Pilih Pemasok';
		foreach($data as $row) {
			$options[$row['id']] = $row['nama'];
		}
		return $options;
	}
}