<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_barang_model extends Elegant\Model {
	protected $table = 'ref_kategori_barang';

	public function get_options()
	{
		$data = $this->all()->toArray();
		$options[''] = 'Pilih Kategori';
		foreach($data as $row) {
			$options[$row['id']] = $row['nama'];
		}
		return $options;
	}
}