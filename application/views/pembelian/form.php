<?php
	$barang_model = new Barang_model();
	$list_barang = $barang_model->get_options();

	$pemasok_model = new Pemasok_model();
	$list_pemasok = $pemasok_model->get_options();
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
						<div class="col-sm-2"><label class="control-label">Pemasok</label></div>
						<div class="col-sm-4">
							<?= form_dropdown('Pembelian[id_pemasok]', $list_pemasok, set_value('Pembelian[id_pemasok]', isset($model) ? $model->id_pemasok : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">No Batch</label></div>
						<div class="col-sm-4">
							<?= form_input('Pembelian[no_batch]', set_value('Pembelian[no_batch]', isset($model) ? $model->no_batch : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">No Faktur</label></div>
						<div class="col-sm-4">
							<?= form_input('Pembelian[no_faktur]', set_value('Pembelian[no_faktur]', isset($model) ? $model->no_faktur : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Tanggal Faktur</label></div>
						<div class="col-sm-2">
							<div class="input-group">
								<?= form_input('Pembelian[tgl_faktur]', set_value('Pembelian[tgl_faktur]', isset($model) ? convert_date($model->tgl_faktur, 'tgl', '/') : ''), ['class'=>'form-control datepicker required', 'placeholder'=>'dd/mm/yyyy']);?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Tanggal Jatuh Tempo</label></div>
						<div class="col-sm-2">
							<div class="input-group">
								<?= form_input('Pembelian[tgl_jatuh_tempo]', set_value('Pembelian[tgl_jatuh_tempo]', isset($model) ? convert_date($model->tgl_jatuh_tempo, 'tgl', '/') : ''), ['class'=>'form-control datepicker required', 'placeholder'=>'dd/mm/yyyy']);?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Jumlah</label></div>
						<div class="col-sm-3">
							<?= form_input('Pembelian[jumlah_total]', set_value('Pembelian[jumlah_total]', isset($model) ? $model->jumlah_total : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Harga</label></div>
						<div class="col-sm-3">
							<?= form_input('Pembelian[harga_total]', set_value('Pembelian[harga_total]', isset($model) ? $model->harga_total : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">PPN</label></div>
						<div class="col-sm-3">
							<?= form_input('Pembelian[ppn]', set_value('Pembelian[ppn]', isset($model) ? $model->ppn : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Diskon</label></div>
						<div class="col-sm-3">
							<?= form_input('Pembelian[diskon]', set_value('Pembelian[diskon]', isset($model) ? $model->diskon : ''), ['class'=>'form-control']);?>
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