<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_grup_model extends Elegant\Model {
	protected $table = 'user_grup';

	public function get_options()
	{
		$data = $this->all()->toArray();
		$options[''] = 'Pilih Level';
		foreach($data as $row) {
			$options[$row['id']] = $row['nama'];
		}
		return $options;
	}
}