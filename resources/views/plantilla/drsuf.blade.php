<!DOCTYPE html>
<html lang="es">
<?php 
$variable="";

?>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>RSU-F :: @yield('titulo')</title>
		<link rel="icon" type="image/png" href="{{url('plantilla/images/gallery/icono-rsu-unheval.png')}}" />

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		{!!Html::style('plantilla/css/bootstrap.min.css')!!}
		{!!Html::style('plantilla/font-awesome/4.5.0/css/font-awesome.min.css')!!}
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		{!!Html::style('plantilla/css/fonts.googleapis.com.css')!!}

		<!-- ace styles -->
		{!!Html::style('plantilla/css/ace.min.css')!!}
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="plantilla/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		{!!Html::style('plantilla/css/ace-skins.min.css')!!}
		{!!Html::style('plantilla/css/ace-rtl.min.css')!!}

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="plantilla/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		{!!Html::script('plantilla/js/ace-extra.min.js')!!}
		@yield('activacion')
		@yield('estilos')

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="plantilla/js/html5shiv.min.js"></script>
		<script src="plantilla/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<img src="{{URL::to('plantilla/images/gallery/logo-rsu-unheval.png')}}" height="26px;">
							
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
												
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="{{URL::to('plantilla/images/avatars/avatar5.png')}}"
								alt="Foto" />
								<span class="user-info">
									<small>Nombres</small>
									Apellidos
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Ajustes
									</a>
								</li>
								<li>
									<a href="{{url('manual/directivo.pdf')}}" target="_black">
										<i class="ace-icon fa fa-exclamation"></i>
										Ayuda
									</a>
								</li>
								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<b>
						Facultad
						</b>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="{{$variable}}">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-folder-open"></i>
							<span class="menu-text"> Proyectos </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="{{$variable}}">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									En Curso
								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="{{$variable}}">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Culminados
								</a>
								<b class="arrow"></b>
							</li>

							<li class="{{$variable}}">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Solicitudes
								</a>
								<b class="arrow"></b>
							</li>

						</ul>
					</li>
					<!-- <li class="active open"> -->
					<li class="{{$variable}}">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-text"></i>
							<span class="menu-text"> Archivos </span>
						</a>
					</li>

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<!-- Rutas -->
						&nbsp;<img src="{{URL::to('plantilla/images/gallery/icono-rsu-unheval.png')}}" height="20px">
						@yield('ruta') 
						
					</div>

					<div class="page-content">
						<div class="row">
							@yield('contenido')
						</div>
					</div>


				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Responsabilidad Social Universitaria</span>
							- UNHEVAL &copy; 2018
						</span>

						&nbsp; &nbsp;
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		{!!Html::script('plantilla/js/jquery-2.1.4.min.js')!!}

		<!-- <![endif]-->

		<!--[if IE]>
<script src="plantilla/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='plantilla/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		{!!Html::script('plantilla/js/bootstrap.min.js')!!}

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		{!!Html::script('plantilla/js/ace-elements.min.js')!!}
		{!!Html::script('plantilla/js/ace.min.js')!!}
		<!-- inline scripts related to this page -->
		<!--Otros Scripts-->
		@yield('script')
		<!--FIN de Otros Scripts-->
	</body>
</html>
