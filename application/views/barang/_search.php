<?= form_open(current_url(), array('class'=>'form-inline'));?>
	<div class="form-group">
		<div class="input-group">
			<input type="text" name="keyword" class="form-control input-sm" value="<?= $this->session->userdata($cls_name.'_keyword')?>" placeholder="Cari data..." size="30">
      	</div>
		<button type="submit" class="btn btn-sm btn-default">Cari</button>
	</div>
<?= form_close();?>