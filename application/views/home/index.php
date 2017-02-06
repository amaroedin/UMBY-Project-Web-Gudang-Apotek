<div class="col-md-7">
	<div class="panel">
		<div class="panel-body">
			<div class="example-box-wrapper">
				<div id="chart"></div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?= base_url()?>assets/plugins/highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/plugins/highcharts/exporting.js"></script>
<script type="text/javascript">
	$(function () {
	    Highcharts.chart('chart', {
	        chart: {
	            type: 'column'
	        },
	        title: {
	            text: 'Statistik Barang Berdasarkan Jenisnya'
	        },
	        xAxis: {
	            type: 'category',
	            labels: {
	                rotation: -45,
	                style: {
	                    fontSize: '13px',
	                    fontFamily: 'Verdana, sans-serif'
	                }
	            }
	        },
	        yAxis: {
	            min: 0,
	            title: {
	                text: 'Jenis Barang'
	            }
	        },
	        legend: {
	            enabled: false
	        },
	        tooltip: {
	            pointFormat: 'Jumlah: <b>{point.y:.1f}</b>'
	        },
	        series: [{
	            data: [
	            	<?php foreach($stat_jenis_barang as $key=>$row){
	                	echo "['".$row->nama_jenis."', $row->jml]";
	                	if(($key+1) < count($stat_jenis_barang)) {
	                		echo ",";
	                	}
	                }?>
	            ],
	            dataLabels: {
	                enabled: true,
	                rotation: -90,
	                color: '#FFFFFF',
	                align: 'right',
	                format: '{point.y:.1f}', // one decimal
	                y: 10, // 10 pixels down from the top
	                style: {
	                    fontSize: '13px',
	                    fontFamily: 'Verdana, sans-serif'
	                }
	            }
	        }]
	    });
	});
</script>