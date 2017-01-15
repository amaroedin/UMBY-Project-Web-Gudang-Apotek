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
							<?= form_input('Pemasok[nama]', set_value('Pemasok[nama]', isset($model) ? $model->nama : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Alamat</label></div>
						<div class="col-sm-8">
							<?= form_input('Pemasok[alamat]', set_value('Pemasok[alamat]', isset($model) ? $model->alamat : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Kode Pos</label></div>
						<div class="col-sm-2">
							<?= form_input('Pemasok[kd_pos]', set_value('Pemasok[kd_pos]', isset($model) ? $model->kd_pos : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">No Telepon</label></div>
						<div class="col-sm-3">
							<?= form_input('Pemasok[no_telpon]', set_value('Pemasok[no_telpon]', isset($model) ? $model->no_telpon : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Fax</label></div>
						<div class="col-sm-3">
							<?= form_input('Pemasok[fax]', set_value('Pemasok[fax]', isset($model) ? $model->fax : ''), ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Email</label></div>
						<div class="col-sm-3">
							<?= form_input('Pemasok[email]', set_value('Pemasok[email]', isset($model) ? $model->email : ''), ['class'=>'form-control required']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Kontak Person</label></div>
						<div class="col-sm-5">
							<?= form_input('Pemasok[kontak_person]', set_value('Pemasok[kontak_person]', isset($model) ? $model->kontak_person : ''), ['class'=>'form-control required']);?>
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