<ul class="sidebar-menu">
	<li class=""><a href="<?= base_url()?>admin/home"><i class="fa fa-desktop"></i>Dashboard</a></li>
	<li><a href="<?= base_url()?>admin/pemasok/clear"><i class="fa fa-institution"></i>Pemasok</a></li>
	<li><a href="<?= base_url()?>admin/barang/clear"><i class="fa fa-cubes"></i>Barang</a></li>
	<?php /*<li><a href="<?= base_url()?>admin/pembelian/clear"><i class="fa fa-shopping-cart"></i>Pembelian</a></li>
	<li><a href="<?= base_url()?>admin/stok/clear"><i class="fa fa-database"></i>Stok</a></li>*/ ?>
	<li class="treeview">
		<a href="#"><i class="fa fa-gears"></i>Pengaturan<span class="fa fa-angle-left pull-right"></span></a>
		<ul class="treeview-menu" style="display: none;">
			<li><a href="<?= base_url()?>admin/jenis_barang/clear">Jenis Barang</a></li>
			<li><a href="<?= base_url()?>admin/kategori_barang/clear">Kategori Barang</a></li>
			<li><a href="<?= base_url()?>admin/satuan/clear">Satuan Barang</a></li>
		</ul>
	</li>
	<li><a href="<?= base_url()?>admin/user/clear"><i class="fa fa-users"></i>Pengguna</a></li>
</li>
</ul>