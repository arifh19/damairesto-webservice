<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIPUT <SISTEM KEUANGAN RT></title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

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
				<a class="navbar-brand" href="#"><span>SIPUT</span> SISTEM KEUANGAN RT</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $data_user[0]->user_username;?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url('login/logout'); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

		<ul class="nav menu">
			<li><a href="<?php echo base_url('home')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-home"></use></svg> Beranda</a></li>
			<li><a href="<?php echo base_url('pemasukan')?>"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Pemasukan</a></li>
			<li><a href="<?php echo base_url('grafik')?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Grafik Pemasukan dan Pengeluaran</a></li>
			<li class="active"><a href="<?php echo base_url('warga')?>"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Data Warga</a></li>
			
			<li role="presentation" class="divider"></li>
			<!-- <li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li> -->
		</ul>
		<div class="attribution">SIPUT<br/><a href="http://www.glyphs.co" style="color: #333;">Icons by Glyphs</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Warga</h1>
			</div>
		</div><!--/.row-->
			

		<div class="row">
			<div class="col-md-">
				<div class="panel panel-default">
					<div class="panel-heading"> Data Pengeluaran </div>
					<div class="panel-body">
						<table data-toggle="table" data-url="x"  data-show-refresh="true" 
						data-show-toggle="true" data-show-columns="true" data-search="true" 
						data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-sortable="true">Username</th>
						        <th data-sortable="true">Full Name</th>
						        <th data-sortable="true">Password</th>
						        <th data-sortable="true">Nomor KTP</th>
						        <th data-sortable="true">Alamat</th>
						        <th data-sortable="true">Tanggal Lahir</th>
						        <th data-sortable="true">Tipe User</th>
						    </tr>
						    </thead>
							
							<tbody>
							<?php foreach ($data_user as $key => $value) { ?>
							<tr>
								<td><?php echo $value->user_username; ?></td>
								<td><?php echo $value->user_displayname;?></td>
								<td><?php echo $value->user_password;?></td>
								<td><?php echo $value->user_ktp; ?></td>
								<td><?php echo $value->user_alamat;?></td>
								<td><?php echo $value->user_tgl_lahir; ?></td>
								<td><?php echo $value->user_tipe; ?></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		

			
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"> Data Warga </div>
					<div class="panel-body">
						<table data-toggle="table" data-url="<?php echo base_url();?>users"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="user_username" data-sortable="true">Username</th>
						        <th data-field="user_displayname"  data-sortable="true">Full Name</th>
						        <th data-field="user_ktp"  data-sortable="true">Nomor KTP</th>
						        <th data-field="user_alamat"  data-sortable="true">Alamat</th>
						        <th data-field="user_tgl_lahir"  data-sortable="true">Tanggal Lahir</th>
						        <th data-field="user_tipe" data-sortable="true">Tipe User</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
		
	</div><!--/.main-->

	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
