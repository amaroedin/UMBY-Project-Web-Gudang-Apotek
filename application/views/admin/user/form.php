<?php
	$level_model = new User_grup_model();
    $list_level = $level_model->get_options();
?>

<div class="col-md-12">
	<div class="panel">
		<div class="box-header">
			<h2 class="box-title">Form Pengguna</h2>
		</div>
		<div class="box-body">
			<div class="content-box-wrapper">
				<?= form_open(current_url(), array('id'=>'user_form', 'class'=>'form-horizontal'));?>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Level</label></div>
						<div class="col-sm-6">
							<?php //$disabled = ($model->id_grup == $this->session->userdata('id_grup') ? 'disabled' : '');?>
							<?= form_dropdown('User[id_grup]', $list_level, set_value('User[id_grup]', isset($model) ? $model->id_grup : ''), ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Nama</label></div>
						<div class="col-sm-6">
							<?= form_input('User[nama]', set_value('User[nama]', isset($model) ? $model->nama : ''), ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Username</label></div>
						<div class="col-sm-6">
							<?= form_input('User[username]', set_value('User[username]', isset($model) ? $model->username : ''), ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Password</label></div>
						<div class="col-sm-6">
							<?= form_password('User[password]', '', ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Ulangi Password</label></div>
						<div class="col-sm-6">
							<?= form_password('User[repeat_password]', '', ['class'=>'form-control']);?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2"><label class="control-label">Status</label></div>
						<div class="col-sm-6">
							<?= form_radio('User[id_status]', 1, set_radio('User[id_status]', isset($model) && $model->id_status == 1 ? TRUE : FALSE), ['class'=>'radio-inline', 'id'=>'aktif']);?><label for="aktif">Aktif</label>
							&nbsp;&nbsp;
							<?= form_radio('User[id_status]', 1, set_radio('User[id_status]', isset($model) && $model->id_status == 1 ? TRUE : FALSE), ['class'=>'radio-inline', 'id'=>'non-aktif']);?><label for="non-aktif">Tidak Aktif</label>
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