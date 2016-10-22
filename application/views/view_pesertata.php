<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Peserta TA</li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
			<h2>Daftar Peserta TA</h2>
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
							<th>KK</th>
							<th>Judul</th>
							<th>Pembimbing</th>
							<th>Kelas</th>
							<th>Kontak</th>
							<th>Semester</th>
							<th>SK</th>
							<th>Seminar</th>
							<th>Sidang</th>
							<th>Perwalian</th>
						</tr>
					</thead>
					<tbody>
                                <?php
                                foreach ($master_ta as $peserta) {
                                    ?>
                                    <tr>
										<td class=""><?php echo $peserta->nrp; ?></td>
										<td class=""><?php echo $peserta->nama; ?></td>
										<td class=""><?php echo $peserta->kk; ?></td>
										<td class=""><?php echo $peserta->judul; ?></td>
										<td class=""><?php echo $peserta->nama_pembimbing1; ?><br><?php echo $peserta->nama_pembimbing2; ?></td>
										<td class=""><?php echo $peserta->kelas; ?></td>
										<td class=""><?php echo $peserta->kontak; ?></td>
										<td class=""><?php echo $peserta->semester; ?></td>
										<td class=""><?php echo $peserta->tgl_sk; ?></td>
										<td class=""><?php echo $peserta->tgl_seminar; ?></td>
										<td class=""><?php echo $peserta->tgl_sidang; ?></td>
										<td class=""><?php echo $peserta->perwalian; ?></td>
									</tr>	
                                <?php } ?>                                      
                    </tbody>
					
				</table>
				</div>
		</div>
		</div>
		</div>
		</div>	
	</div>
	</div	<!--/.main-->

	<?php include "footer.php"; ?>
