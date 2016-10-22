<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Prosedur TA</li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
				<h2>Prosedur TA</h2>
				<div class="row">
	        <div class="col-lg-12">
	        <div class="panel panel-default">
				<div class="panel-body">	
				<?php
					foreach ($prosedur_ta_judul as $prosedurtajudul) {
                ?>
                <h3><?php echo $prosedurtajudul->judul; ?></h3>
                <h5><i><?php echo $prosedurtajudul->catatan; ?></i></h5>
					
	        	
	            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Prosedur</th>
						</tr>
					</thead>
					<!-- <?php  $prosedurkpjudul->id; ?> -->
					<tbody>
                                
							    <?php
                                foreach ($prosedur_ta_detail as $prosedurta) {
                                    ?>
                                    <?php if($prosedurta->id_judul == $prosedurtajudul->id){ ?>
                                    <tr>
                                    	<td><?php echo $prosedurta->no_prosedur; ?></td>
										<td><?php echo $prosedurta->prosedur; ?></td>
									</tr>	
									<?php } ?>
                                <?php } ?>                                      
                    </tbody>
                </table>
                </div>
		
		
                <?php } ?> 
                </div>
                </div>
		</div>
		</div>

				
		</div>
	</div>	<!--/.main-->

	<?php include "footer.php"; ?>

	