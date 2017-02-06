<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistik_model extends Elegant\Model
{
	/*public function get_statistik_by_jenis()
	{
		return $this->select('SUM(id_jenis_barang) jml, ref_jenis_barang.nama nama_jenis')
						->from('barang b')
						->join('ref_jenis_barang', 'b.id_jenis_barang=ref_jenis_barang.id', 'left')
						->group_by('id_jenis_barang')
						->order_by('ref_jenis_barang.nama')
						->get();
	}

	public function get_statistik_by_kategori()
	{
		return $this->select('SUM(id_kategori_barang) jml, ref_kategori_barang.nama nama_jenis')
						->from('barang b')
						->join('ref_kategori_barang', 'b.id_jenis_barang=ref_kategori_barang.id', 'left')
						->group_by('id_kategori_barang')
						->order_by('ref_kategori_barang.nama')
						->get();
	}*/
}