<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_barang_model extends Elegant\Model {
	protected $table = 'ref_jenis_barang';

	public function get_options()
	{
		$data = $this->all()->toArray();
		$options[''] = 'Pilih Jenis';
		foreach($data as $row) {
			$options[$row['id']] = $row['nama'];
		}
		return $options;
	}
}