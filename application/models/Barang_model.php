<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends Elegant\Model {
	protected $table = 'barang';

	function scopeSearch($query, $keyword)
	{
		return $query->like('nama', $keyword)->or_like('kode', $keyword);
	}

	public function Satuan()
	{
		return $this->belongsTo('Satuan_model', 'id_satuan');
	}

	public function Kategori()
	{
		return $this->belongsTo('Kategori_barang_model', 'id_kategori_barang');
	}

	public function Jenis()
	{
		return $this->belongsTo('Jenis_barang_model', 'id_jenis_barang');
	}
}