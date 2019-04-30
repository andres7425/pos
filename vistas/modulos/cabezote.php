<div class="wrapper" data="blue">
	<div class="navbar-minimize-fixed">
		<button class="minimize-sidebar btn btn-link btn-just-icon">
			<i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
			<i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
		</button>
	</div>
	<div class="sidebar" data="blue">
		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="javascript:void(0)" class="simple-text logo-mini">
					KS
				</a>
				<a href="javascript:void(0)" class="simple-text logo-normal">
					KNIGHT-SOFT
				</a>
			</div>
			<ul class="nav">
				<li>
					<a href="inicio">
						<i class="tim-icons icon-app"></i>
						<p>Inicio</p>
					</a>
				</li>
				<li>
					<a data-toggle="collapse" href="#pagesExamples">
						<i class="tim-icons icon-badge"></i>
						<p>
							Usuarios
							<b class="caret"></b>
						</p>
					</a>
					<div class="collapse" id="pagesExamples">
						<ul class="nav">
							<li>
								<a href="negocios">
									<i class="tim-icons icon-bank"></i>
									<span class="sidebar-normal"> Negocios </span>
								</a>
							</li>
							<li>
								<a href="usuarios">
									<i class="tim-icons icon-user-run"></i>
									<span class="sidebar-normal"> Usuarios </span>
								</a>
							</li>
						</ul>
					</div>
				<li>
					<a href="categorias">
						<i class="tim-icons icon-tag"></i>
						<p>Categorías</p>
					</a>
				</li>
				<li>
					<a href="productos">
						<i class="tim-icons icon-components"></i>
						<p>Productos</p>
					</a>
				</li>
				<li>
					<a href="clientes">
						<i class="tim-icons icon-single-02"></i>
						<p>Clientes</p>
					</a>
				</li>
				<li>
					<a data-toggle="collapse" href="#formsExamples">
						<i class="tim-icons icon-notes"></i>
						<p>
							Ventas
							<b class="caret"></b>
						</p>
					</a>
					<div class="collapse" id="formsExamples">
						<ul class="nav">
							<li>
								<a href="ventas">
									<i class="tim-icons icon-coins"></i>
									<span>Historial de ventas</span>
								</a>
							</li>
							<li>
								<a href="crear-venta">
									<i class="tim-icons icon-cart"></i>
									<span>Crear ventas</span>
								</a>
							</li>
							<li>
								<a href="reportes">
									<i class="tim-icons icon-chart-bar-32"></i>
									<span>Respanorte de ventas</span>
								</a>
							</li>
						</ul>
					</div>
			</ul>
		</div>
	</div>
	<div class="main-panel ps ps--active-y" data="blue">
		<!-- Navbar -->
		<nav class="navbar-absolute navbar-transparent navbar navbar-expand-lg">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<div class="navbar-toggle d-inline">
						<button type="button" class="navbar-toggler">
							<span class="navbar-toggler-bar bar1"></span>
							<span class="navbar-toggler-bar bar2"></span>
							<span class="navbar-toggler-bar bar3"></span>
						</button>
					</div>
					<a class="navbar-brand" href="inicio">Sistema de inventarios</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false"
				 aria-label="Toggle navigation">
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
				</button>
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="dropdown nav-item">
							<a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<div class="notification d-none d-lg-block d-xl-block"></div>
								<i class="tim-icons icon-sound-wave"></i>
								<p class="d-lg-none">
									Notifications
								</p>
							</a>
							<ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
								<li class="nav-link">
									<a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
								</li>
								<li class="nav-link">
									<a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
								</li>
								<li class="nav-link">
									<a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
								</li>
								<li class="nav-link">
									<a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
								</li>
								<li class="nav-link">
									<a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
								</li>
							</ul>
						</li>
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<div class="photo">

									<?php
 									if($_SESSION["foto"] != ""){
	 									echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
 									}else{

	 									echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
 									}
 									?>

								</div>
								</p>
							</a>
						</li>
						<li class="dropdown nav-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<h4 class="h4">
									<?php echo $_SESSION["nombre"]?>
								</h4>
							</a>
							<ul class="dropdown-menu dropdown-navbar" style="left: 0px;">
								<li class="nav-link">
									<a href="javascript:void(0)" class="nav-item dropdown-item">Perfil</a>
								</li>
								<li class="nav-link">
									<a href="javascript:void(0)" class="nav-item dropdown-item">Configuraciónes</a>
								</li>
								<li class="dropdown-divider"></li>
								<li class="nav-link">
									<a href="salir" class="nav-item dropdown-item">Salir</a>
								</li>
							</ul>
						</li>
						<li class="separator d-lg-none"></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
		 aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="tim-icons icon-simple-remove"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Navbar -->