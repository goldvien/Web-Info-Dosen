<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Seminar TA</li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
			<h2>Jadwal Seminar TA</h2>
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
							<th>Jadual</th>
							<th>Pembimbing</th>
							<th>Penguji</th>
							<th>Kelas</th>
							<th>SK</th>
						</tr>
					</thead>
					<tbody>
                                <?php
                                foreach ($master_ta as $seminar) {
                                    ?>
                                    <tr>
										<td class=""><?php echo $seminar->nrp; ?></td>
										<td class=""><?php echo $seminar->nama; ?></td>
										<td class=""><?php echo $seminar->judul; ?></td>
										<td class=""><?php echo $seminar->tgl_seminar; ?></td>
										<td class=""><?php echo $seminar->nama_pembimbing1; ?><br/><hr/><?php echo $seminar->nama_pembimbing2; ?></td>
										<td class=""><?php echo $seminar->penguji1_seminar; ?><br/><hr/><?php echo $seminar->penguji2_seminar; ?></td>
										<td class=""><?php echo $seminar->kelas; ?></td>
										<td class=""><?php echo $seminar->no_sk; ?></td>
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
	</div>	<!--/.main-->

	<?php include "footer.php"; ?>
