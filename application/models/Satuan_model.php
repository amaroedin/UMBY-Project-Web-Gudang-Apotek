<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_model extends Elegant\Model {
	protected $table = 'ref_satuan';

	public function get_options()
	{
		$data = $this->all()->toArray();
		$options[''] = 'Pilih Satuan';
		foreach($data as $row) {
			$options[$row['id']] = $row['nama'];
		}
		return $options;
	}
}