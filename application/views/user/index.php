<div class="col-md-12">
	<div class="panel">
		<div class="box-header">
			<div class="pull-left">
				<a href="<?= base_url()?>admin/<?= $cls_name;?>/create" class="btn btn-success">Tambah Data</a>
			</div>
			<div class="pull-right">
				<?php $this->load->view('user/_search') ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="box-body">
			<div class="content-box-wrapper">
				<table class="table table-responsive table-striped table_content">
					<tr>
						<th style="width:10px;">No</th>
						<th style="width:60px;">Aksi</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Status</th>
					</tr>
						<?php if(count($model)){ ?>
							<?php $no=1; foreach($model as $row){ ?>
							<tr>
								<td class="text-center"><?= ($no+$offset);?></td>
								<td class="text-center">
									<a href="<?= base_url()?>admin/user/update/<?= $row->id?>" title="Edit"><i class="fa fa-edit"></i></a>
									<?php if($row->id_grup != $this->session->userdata('id_grup')){ ?>
										<a href="<?= base_url()?>admin/user/delete/<?= $row->id?>" title="Hapus"><i class="fa fa-trash"></i></a>
									<?php } ?>
								</td>
								<td><?= $row->username;?></td>
								<td><?= $row->nama;?></td>
								<td><?= $row->Grup->nama;?></td>
								<td>
									<span class="label label-<?= $row->id_status == 1 ? 'success' : 'danger'?>"><?= $row->Status->nama;?></span>
								</td>
							</tr>
							<?php $no++; } ?>
						<?php }else{ ?>
							<tr>
								<td colspan="6"><?= $this->config->item('empty');?></td>
							</tr>
						<?php } ?>
				</table>
			</div>
		</div>
		<div class="box-footer clearfix">
			<div class="pull-left">
				<?= isset($paging) ? $paging : '';?>
			</div>
			<div class="pull-right">
				<p><?= isset($page) ? $page : '';?></p>
			</div>
		</div>
	</div>
</div>