	<li><a href='index.html'>Home</a></li>
	<li><a href="<?php echo base_url('Site/Info') ?>">Info de la Industria</a></li>
	<li><a href='elements.html'>Administracion</a></li>
	<li>
		<span class='opener'>Submenu</span>
		<ul>
			<li><a href='#'>Lorem Dolor</a></li>
			<li><a href='#'>Ipsum Adipiscing</a></li>
			<li><a href='#'>Tempus Magna</a></li>
			<li><a href='#'>Feugiat Veroeros</a></li>
		</ul>
	</li>
<?php 
	if($_SESSION['cve_perfil'] == '001') {
 ?>
	<li><a href='#'>Recursos Humanos</a></li>
	<li><a href='#'>Logistica</a></li>
	<li>
		<span class='opener'>Another Submenu</span>
		<ul>
			<li><a href='#'>Lorem Dolor</a></li>
			<li><a href='#'>Ipsum Adipiscing</a></li>
			<li><a href='#'>Tempus Magna</a></li>
			<li><a href='#'>Feugiat Veroeros</a></li>
		</ul>
	</li>
	<li><a href='#'>Produccion</a></li>
	<li><a href="<?php echo base_url('Site/Ventas') ?>">Ventas</a></li>
	<li><a href='#'>Tesoreria</a></li>
	<li><a href='#'>Fianzas</a></li>
<?php 
	}
 ?>