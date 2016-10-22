<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "sidebar.php"; 
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Jadual Bimbingan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
				<h2>Edit Jadual Bimbingan</h2>
				<form class="well form-horizontal" action="<?php echo site_url('Bimbingan/edit_jadual'); ?>" method="POST" >
				<div class="row">
        <div class="col-lg-12">		
        	<div class="panel panel-default">
			<div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th width="150">Hari</th>
							<th width="200">Jam</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
                                <?php
                                $i=0;
                                $j=0;
                                $k=0;
                                foreach ($hari as $haris) {
	                                	$hari="hari".$i++; 
	                                	$jam="jam".$j++;
		                                $ket="ket".$k++;  
	                                ?>
                                	<tr>
                                		<td class="user-name">
											<input  name=<?php echo $hari; ?> placeholder="" class="form-control"  type="time" value="<?php echo $haris->hari; ?>" disabled>
			  							</td>
	                                <?php foreach ($jadual_bimbingan as $jadual) {         
	                                	if($haris->hari==$jadual->hari){ 
	                                		$jams=$jadual->jam;
	                                		$kets=$jadual->keterangan;
	                                	}
	                                } 
	                                ?>
	                                	<td class="user-email">
			  								<input  name=<?php echo $jam; ?> placeholder="" class="form-control"  type="time" value="<?php echo $jams; ?>">
			  							</td>
										<td class="user-phone">
											<input  name=<?php echo $ket; ?> placeholder="" class="form-control"  type="text" value="<?php echo $kets; ?>">
			  							</td>
                                	</tr>
                                <?php } ?>                                   
                    </tbody>
					
				</table>			
				<div align="right">
			    <button type="submit" class="btn btn-primary">Simpan <span class="glyphicon glyphicon-send"></span></button>
			  	</div>
			  	</div>
		</div>
		</div>
		</div>
		</div>	
			</form>
		</div>	
	</div>	<!--/.main-->

	<?php include "footer.php"; ?>
