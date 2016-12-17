<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends Elegant\Model {
	protected $table = 'user';

	public function get_validate($username, $password)
	{
		return $this->where(['username'=>$username, 'password_hash'=>$password])->get();
	}
}