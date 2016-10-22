<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Kalender KP/TA</li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
			<div class="row">		
	        <div class="col-lg-6">		
	        	<h2>Kalender KP</h2>
	        	<div class="panel panel-default">
                            
                        
				<div class="panel-body">
	            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Mulai</th>
							<th>Selesai</th>
							<th>Kegiatan</th>
						</tr>
					</thead>
					<tbody>
                                <?php
                                foreach ($kalender_kp as $kalenderkp) {
                                    ?>
                                    <tr>
										<td class="user-name"><?php echo $kalenderkp->no; ?></td>
										<td class="user-email"><?php echo $kalenderkp->tanggal_mulai; ?></td>
										<td class="user-phone"><?php echo $kalenderkp->tanggal_selesai; ?></td>
										<td class="user-mobile"><?php echo $kalenderkp->kegiatan; ?></td>
									</tr>	
                                <?php } ?>                                      
                    </tbody>
				</table>
				</div>
					</div>
					</div>
				</div>
				<div class="col-lg-6">	
				<h2>Kalender TA</h2>	
	        	<div class="panel panel-default">
				<div class="panel-body">
	            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Mulai</th>
							<th>Selesai</th>
							<th>Kegiatan</th>
						</tr>
					</thead>
					<tbody>
						<?php
                                foreach ($kalender_ta as $kalenderta) {
                                    ?>
                                    <tr>
										<td class="user-name"><?php echo $kalenderta->no; ?></td>
										<td class="user-email"><?php echo $kalenderta->tanggal_mulai; ?></td>
										<td class="user-phone"><?php echo $kalenderta->tanggal_selesai; ?></td>
										<td class="user-mobile"><?php echo $kalenderta->kegiatan; ?></td>
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
