<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			</ol>
		</div><!--/.row-->
		
		<div class="component">
			<div class="row">		
	        <div class="col-lg-6">		
	        	<div class="panel panel-default">                         
				<div class="panel-body">
	            <h2>Selamat Datang</h2>
	        	<h3><i><?php echo $dosen->nama; ?></i></h3>
			    </div>
				</div>
			</div>
			</div>
		</div>
	</div>	<!--/.main-->

	<?php include "footer.php"; ?>
