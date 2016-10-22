<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>
<script>
// $(function(){	
// 	$('#searchpeserta').on('keyup',function(){
// 			$.ajax({
// 				url:'http://localhost/infodosen/index.php/KP/cari',
// 				method: 'post',
// 				data:{'caripeserta':$('#searchpeserta').val()},
// 				success:function(hasil){
// 					$('#finalResult').html(hasil);
// 				}
// 			});
		
// 	});	
// });
</script>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Peserta KP</li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
			<h2>Daftar Peserta KP</h2>
			<hr />
			<!-- <form method="POST">
			  <img class="gambarcari" src="<?php echo base_url() ?>/assets/images/search.png">
			  <input type="text" class="search" id="searchpeserta" name="caripeserta" placeholder="cari...">
			</form>
			<div id="finalResult">							
			<div style="overflow-x:auto;"> -->
		<div class="row">
        <div class="col-lg-12">		
        	<div class="panel panel-default">
		<div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>NRP</th>
							<th>Nama</th>
							<th>Judul</th>
							<th>Tempat</th>
							<th>Kelas</th>
							<th>Kontak</th>
							<th>No SK</th>
							<th>Tanggal SK</th>
							<th>Semester</th>
							<th>Seminar</th>
							<th>Perwalian</th>
						</tr>
					</thead>
					<tbody>
                                <?php
                                foreach ($master_kp as $peserta) {
                                    ?>
                                    <tr>
										<td class=""><?php echo $peserta->nrp; ?></td>
										<td class=""><?php echo $peserta->nama; ?></td>
										<td class=""><?php echo $peserta->judul; ?></td>
										<td class=""><?php echo $peserta->tempat; ?></td>
										<td class=""><?php echo $peserta->kelas; ?></td>
										<td class=""><?php echo $peserta->kontak; ?></td>
										<td class=""><?php echo $peserta->no_sk; ?></td>
										<td class=""><?php echo $peserta->tgl_sk; ?></td>
										<td class=""><?php echo $peserta->semester; ?></td>
										<td class=""><?php echo $peserta->tgl_seminar; ?></td>
										<td class=""><?php echo $peserta->perwalian; ?></td>
									</tr>	
                                <?php } ?>                                      
                    </tbody>
					
				</table>
				</div>
			
			<!-- <div class="row">
	            <div class="col-lg-12" align="right">
					<?php echo $pagination; ?>
				</div>
			</div> -->
			</div>
		</div>
		</div>
		</div>	
	</div>
	</div>	<!--/.main-->

	<?php include "footer.php"; ?>
