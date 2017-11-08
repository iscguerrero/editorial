<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $this->e($title)?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url('resources/font-awesome/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/css/main.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('resources/toastr/toastr.min.css')?>">
		<?php echo $this->section('extra_style')?>
	</head>
	<body>
			<div id="wrapper">

			<!-- Main -->
				<div id="main">
					<div class="inner">

						<!-- Header -->
							<header id="header">
								<a href="index.html" class="logo"><strong>Editorial</strong> </a>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									<li><a href="<?php echo base_url('Login/Salir') ?>"><i class="fa fa-site"></i>Salir</a></li>
								</ul>
							</header>

							<?php echo $this->section('page')?>

					</div>
				</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
 							-->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Hola <?php echo $_SESSION['nickname'] ?>!</h2>
									</header>
									<ul>
										<?php $this->insert('partials/menu') ?>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Articulos de interes</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="<?php echo base_url('resources/images/pic07.jpg') ?>" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo base_url('resources/images/pic08.jpg') ?>" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="<?php echo base_url('/resources/images/pic09.jpg') ?>" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contacto</h2>
									</header>
									<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">QBusiness@team.com</a></li>
										<li class="fa-phone">(01 800) 123-45678</li>
										<li class="fa-home">Av. Universidad #8254<br />
										Queretaro,Qro</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
						<!-- 			<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p> -->
								</footer>

						</div>
					</div>

			</div>


		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo base_url('resources/js/jquery.min.js')?>"></script>
		<script src="<?php echo base_url('resources/js/skel.min.js')?>"></script>
		<script src="<?php echo base_url('resources/js/util.js')?>"></script>
		<script src="<?php echo base_url('resources/js/main.js')?>"></script>
		<script src="<?php echo base_url('resources/toastr/toastr.min.js')?>"></script>
		<?php echo $this->section('extra_js')?>
	</body>
</html>
