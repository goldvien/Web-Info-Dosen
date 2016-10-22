<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	if($this->session->userdata('username')=='')
	{
	    redirect('');
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Info Dosen</title>

<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/assets/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/component.css" /> -->


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
<!-- <style> 
.gambarcari{
	width: 50px;
    height:50px;
}
.search {
    width: 130px;
    height:40px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 13px;
    background-color: white;
    /*background-image: url('<?php echo base_url() ?>/assets/images/search.png');*/
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 10px 20px 10px 40px;
    margin-bottom: 10px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
.search:focus {
    width: 30%;
}
</style>-->
<!-- <script type="text/javascript" language="javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/json2.js"></script> -->
<script>
 // $(document).ready(function(){
 //   $("#search").keyup(function(){
 //  if($("#search").val().length>0){
 //  $.ajax({
 //   type: "post",
 //   url: "http://localhost/infodosen/index.php/KP",
 //   cache: false,    
 //   data:'search='+$("#search").val(),
 //   success: function(response){
 //    $('#finalResult').html("");
 //    var obj = JSON.parse(response);
 //    if(obj.length>0){
 //     try{
 //      var items=[];  
 //      $.each(obj, function(i,val){           
 //          items.push($('<tr><td/>').text(val.nrp));
 //          items.push($('<td class=""/>').text(val.nama));
 //          items.push($('<td class=""/>').text(val.judul));
 //          items.push($('<td class=""/>').text(val.tempat));
 //          items.push($('<td class=""/>').text(val.kelas));
 //          items.push($('<td class=""/>').text(val.kontak));
 //          items.push($('<td class=""/>').text(val.no_sk));
 //          items.push($('<td class=""/>').text(val.tgl_sk));
 //          items.push($('<td class=""/>').text(val.semester));
 //          items.push($('<td class=""/>').text(val.tgl_seminar));
 //          items.push($('<td class=""/></tr>').text(val.perwalian));
 //      }); 
 //      $('#finalResult').append.apply($('#finalResult'), items);
 //     }catch(e) {  
 //      alert('Exception while request..');
 //     }  
 //    }else{
 //     $('#finalResult').html($('<li/>').text("No Data Found"));  
 //    }  
    
 //   },
 //   error: function(){      
 //    alert('Error while request..');
 //   }
 //  });
 //  }
 //  return false;
 //   });
 // });

	// $('#search2').on('keyup',function(){
	// 		$.ajax({
	// 			url:'http://localhost/infodosen/index.php/KP/carismt',
	// 			method: 'post',
	// 			data:{'semester':$('#search2').val()},
	// 			success:function(hasil){
	// 				$('#finalResult').html(hasil);
	// 			}
	// 		});
	// });
</script>

</head>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('Dosen');?>"><span>INFO</span>DOSEN</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $this->session->userdata('username') ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo site_url('Dosen');?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="<?php echo site_url('Welcome/logout');?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>

			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<form role="search">
			<div class="form-group">
				<img class="logounpas" src="<?php echo base_url() ?>/assets/images/logo-unpas.png">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="<?php echo site_url('Dosen/master');?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Master Dosen</a></li>
			<li><a href="<?php echo site_url('Bimbingan/jadual');?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Jadual Bimbingan</a></li>
			<li><a href="<?php echo site_url('Kpta');?>"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Kalender KP/TA</a></li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Prosedur KP/TA</span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo site_url('KPTA/prosedurkp');?>">
							<svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Prosedur KP
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url('KPTA/prosedurta');?>">
							<svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Prosedur TA
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Kerja Praktek(KP)</span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo site_url('KP/master/peserta');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Peserta KP
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url('KP/master/seminar');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Seminar KP
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg>Tugas Akhir(TA)</span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="<?php echo site_url('TA/master/peserta');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Peserta TA
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url('TA/master/seminar');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Seminar TA
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url('TA/master/sidang');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sidang TA
						</a>
					</li>
				</ul>
			</li>
			
		</ul>

	</div><!--/.sidebar-->