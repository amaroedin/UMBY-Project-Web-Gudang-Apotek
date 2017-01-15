<?php
	$satuan_model = new Satuan_model();
	$list_satuan = $satuan_model->get_options();

	$kategori_model = new Kategori_barang_model();
	$list_kategori = $kategori_model->get_options();

	$jenis_model = new Jenis_barang_model();
	$list_jenis = $jenis_model->get_options();
?>

<div class="col-md-12">
	<div class="panel">
		<div class="box-header">
			<h2 class="box-title">Form <?= $current_page;?></h2>
		</div>
		<div class="box-body">
			<div class="content-box-wrapper">
				<?= form_open(current_url(), array('id'=>$cls_name.'_form', 'class'=>'form-horizontal'));?>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Kategori</label></div>
						<div class="col-sm-3">
							<?= form_dropdown('Barang[id_kategori_barang]', $list_kategori, set_value('Barang[id_kategori_barang]', isset($model) ? $model->id_kategori_barang : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Nama</label></div>
						<div class="col-sm-2">
							<?= form_input('Barang[kode]', set_value('Barang[kode]', isset($model) ? $model->kode : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Nama</label></div>
						<div class="col-sm-6">
							<?= form_input('Barang[nama]', set_value('Barang[nama]', isset($model) ? $model->nama : ''), ['class'=>'form-control required', 'style'=>'rows=3']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Satuan</label></div>
						<div class="col-sm-4">
							<?= form_dropdown('Barang[id_satuan]', $list_satuan, set_value('Barang[id_satuan]', isset($model) ? $model->id_satuan : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Jenis</label></div>
						<div class="col-sm-4">
							<?= form_dropdown('Barang[id_jenis_barang]', $list_jenis, set_value('Barang[id_jenis_barang]', isset($model) ? $model->id_jenis_barang : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Keterangan</label></div>
						<div class="col-sm-6">
							<?= form_textarea('Barang[keterangan]', set_value('Barang[keterangan]', isset($model) ? $model->keterangan : ''), ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6 col-sm-offset-2">
							<button type="reset" class="btn btn-danger">Bersihkan</button>&nbsp;
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				<?= form_close();?>
			</div>
		</div>
	</div>
</div>