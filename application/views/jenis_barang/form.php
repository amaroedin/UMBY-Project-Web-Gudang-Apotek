<div class="col-md-12">
	<div class="panel">
		<div class="box-header">
			<h2 class="box-title">Form <?= $current_page;?></h2>
		</div>
		<div class="box-body">
			<div class="content-box-wrapper">
				<?= form_open(current_url(), array('id'=>$cls_name.'_form', 'class'=>'form-horizontal'));?>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Nama</label></div>
						<div class="col-sm-6">
							<?= form_input('JenisBarang[nama]', set_value('JenisBarang[nama]', isset($model) ? $model->nama : ''), ['class'=>'form-control required']);?>
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