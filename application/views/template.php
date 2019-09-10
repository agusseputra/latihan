<!DOCTYPE html>
<html>
	<head>
        <title><?=(isset($title))?$title:'';?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?=(isset($meta))?$meta:'';?>">
        <meta name="author" content="Ketut Agus Seputra">
		<link href="<?=base_url('assets/css/latihan.css')?>" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Warung Tegal</h1>
				<nav>
					<ul>
						<li><a href="http://localhost" class="current">Beranda</a></li>
						<li><a href="http://localhost">Pemrograman</a></li>
						<li><a href="http://localhost">Tips n Trick</a></li>
						<li><a href="http://localhost">Internet</a></li>
						<li><a href="http://localhost">KOntak</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<?php $this->load->view($content);?>  
			</section>
			<aside>
			<?php $this->load->view($sidebar);?>  
			</aside>
			<footer>
				&copy; 2015 KOmputer
			</footer>
		</div><!-- .wrapper -->
	</body>
	<script src="<?=base_url('assets/js/template.js')?>"></script>
</html> 