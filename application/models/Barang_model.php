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

	public function get_options()
	{
		$data = $this->all()->toArray();
		$options[''] = 'Pilih Barang';
		foreach($data as $row) {
			$options[$row['id']] = $row['nama'];
		}
		return $options;
	}

	public function get_statistik_by_jenis()
	{
		return $this->select('COUNT(barang.id_jenis_barang) jml, ref_jenis_barang.nama nama_jenis')
					->join('ref_jenis_barang', 'barang.id_jenis_barang=ref_jenis_barang.id', 'right')
					->group_by('ref_jenis_barang.id')
					->order_by('ref_jenis_barang.nama')
					->get();
	}

	public function get_statistik_by_kategori()
	{
		return $this->select('COUNT(b.id_kategori_barang) jml, ref_kategori_barang.nama nama_jenis')
					->from($this->table.' b')
					->join('ref_kategori_barang', 'b.id_kategori_barang=ref_kategori_barang.id', 'right')
					->group_by('b.id_kategori_barang')
					->order_by('ref_kategori_barang.nama')
					->get();
	}
}