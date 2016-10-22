<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include "sidebar.php"; ?>
		<!--/.main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
	<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Master Dosen</li>
			</ol>
		</div><!--/.row-->
		<div class="component">
			<form class="well form-horizontal" action="<?php echo site_url('Dosen/edit_master'); ?>" method="POST" >
			
			<!-- Form Name -->
			<legend>Edit Data Login</legend>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label">Username</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input  name="username" placeholder="" class="form-control"  type="text" value="<?php echo $dosen->username; ?>" autofocus required>
			    </div>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label" >Password</label> 
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			  <input name="password" placeholder="" class="form-control"  type="text" value="<?php echo $dosen->password; ?>" autofocus required>	
		    </div>
			  </div>
			</div>

			<!-- Form Name -->
			<legend>Edit Profil Dosen</legend>

			<div class="form-group">
			  <label class="col-md-4 control-label">Kode</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			  <input  name="first_name" class="form-control"  type="text" value="<?php echo $dosen->kode; ?>" disabled>
			  </div>
			  </div>
			</div>

			<div class="form-group">
			  <label class="col-md-4 control-label">Aktif</label>  
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			   		<?php if ($dosen->aktif==1){
			    		  	$value="iya";}
			    		  else if ($dosen->aktif==0){
			    			$value="tidak";}
			    	?>    
			  <input name="city" placeholder="city" class="form-control"  type="text" value="<?php echo $value; ?>" disabled>
			    </div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Nama</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input  name="nama" placeholder="" class="form-control"  type="text" value="<?php echo $dosen->nama; ?>">
			    </div>
			  </div>
			</div>

			<!-- Text input-->
			      
			<div class="form-group">
			  <label class="col-md-4 control-label">Alamat</label>  
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			  <input name="alamat" placeholder="" class="form-control" type="text" value="<?php echo $dosen->alamat; ?>">
			    </div>
			  </div>
			</div>

			<!-- Text input-->       
			<div class="form-group">
			  <label class="col-md-4 control-label">Telepon</label>  
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
			  <input name="telepon" placeholder="" class="form-control" type="text" value="<?php echo $dosen->telepon; ?>">
			    </div>
			  </div>
			</div>

			<!-- Text input-->
	        <div class="form-group">
			  <label class="col-md-4 control-label">E-Mail</label>  
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			  <input name="email" placeholder="" class="form-control"  type="text" value="<?php echo $dosen->email; ?>">
			    </div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">Kelompok Keahlian</label>  
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			  <input name="kk" placeholder="" class="form-control"  type="text" value="<?php echo $dosen->kk; ?>">
			    </div>
			  </div>
			</div>
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">NIP</label>  
			   <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
			  <input name="nip" placeholder="" class="form-control" type="text" value="<?php echo $dosen->nip; ?>">
			    </div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label">NIDN</label>  
			   <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
			  <input name="nidn" placeholder="" class="form-control" type="text" value="<?php echo $dosen->nidn; ?>">
			    </div>
			  </div>
			</div>

			<!-- 
			<div class="form-group"> 
			  <label class="col-md-4 control-label">Negara</label>
			    <div class="col-md-4 selectContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			    <select name="state" class="form-control selectpicker" >
			      <option value=" " >Please select your state</option>
			      <option>Alabama</option>
			      <option>Alaska</option>
			      
			    </select>
			  </div>
			</div>
			</div>			

			 <div class="form-group">
			                        <label class="col-md-4 control-label">Agama</label>
			                        <div class="col-md-4">
			                            <div class="radio">
			                                <label>
			                                    <input type="radio" name="hosting" value="yes" /> Islam
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label>
			                                    <input type="radio" name="hosting" value="no" /> Kristen
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label>
			                                    <input type="radio" name="hosting" value="no" /> Hindu
			                                </label>
			                            </div>
			                            <div class="radio">
			                                <label>
			                                    <input type="radio" name="hosting" value="no" /> Buddha
			                                </label>
			                            </div>
			                        </div>
			                    </div>

			  
			<div class="form-group">
			  <label class="col-md-4 control-label">Project Description</label>
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
			        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
			  </div>
			  </div>
			</div>
			-->

			
			
			<!-- Form Name -->
			<legend>Edit Klasifikasi Penelitian</legend>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label">First Name</label>  
			  <div class="col-md-4 inputGroupContainer">
			  <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
			    </div>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="col-md-4 control-label" >Last Name</label> 
			    <div class="col-md-4 inputGroupContainer">
			    <div class="input-group">
			  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
			    </div>
			  </div>
			</div>

			

		<!-- Success message -->
			<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

		<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label"></label>
			  <div class="col-md-4">
			    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
			  </div>
			</div>
		</form>
			</div>
	  </div>

	<?php include "footer.php"; ?>
