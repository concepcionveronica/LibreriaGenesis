
<!-- Navigation Bar-->
<header id="topnav">
	<div class="topbar-main">
		<div class="container-fluid">
			<!-- Logo container-->
			<div class="logo">
				<a href="../" class="logo">
					<img src="../public/imagenes/logo.png" alt="" height="30">
				</a>
			</div>
			<!-- End Logo container-->
			<div class="menu-extras topbar-custom">
				<!-- Search input -->
				<div class="search-wrap" id="search-wrap">
					<div class="search-bar">
						<input class="search-input" type="search" placeholder="Search" />
						<a href="#" class="close-search toggle-search" data-target="#search-wrap">
							<i class="mdi mdi-close-circle"></i>
						</a>
					</div>
				</div>
				<ul class="list-inline float-right mb-0">
					<!-- Search -->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
							<i class="mdi mdi-magnify noti-icon"></i>
						</a>
					</li>
					<!-- Fullscreen -->
					<li class="list-inline-item dropdown notification-list hide-phone">
						<a class="nav-link waves-effect" href="#" id="btn-fullscreen">
							<i class="mdi mdi-fullscreen noti-icon"></i>
						</a>
					</li>
					<!-- language-->
					<li class="list-inline-item dropdown notification-list hide-phone">
					</li>
					<!-- notification-->
					<!-- User-->
					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
						aria-haspopup="false" aria-expanded="false">
						<img src="../public/assets/images/users/admin.png" alt="user" class="rounded-circle">
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
						<a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
						<a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
					</div>
				</li>
				<li class="menu-item list-inline-item">
					<!-- Mobile menu toggle-->
					<a class="navbar-toggle nav-link">
						<div class="lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
					<!-- End mobile menu toggle-->
				</li>
			</ul>
		</div>
		<!-- end menu-extras -->
		<div class="clearfix"></div>
	</div> <!-- end container -->
</div>
<!-- end topbar-main -->
<!-- MENU Start -->
<div class="navbar-custom">
	<div class="container-fluid">
		<div id="navigation">
			<!-- Navigation Menu-->
			<ul class="navigation-menu">
				<li class="has-submenu">
					<a href="#"><i class="mdi mdi-view-dashboard"></i>ARCHIVO</a>
					<ul class="submenu">
						<li><a href="insertarUsuario.php">Ingresar Usuario</a></li>
						<li><a onclick="contenido_seccion('vistas/insertarCliente.php')">Ingresar Cliente</a></li>
						<li><a href="insertarProveedor.php">Ingresar Proveedor</a></li>
						<li><a href="insertarProducto.php">Ingresar Producto</a></li>
					</ul>
				</li>
				<li class="has-submenu">
					<a href="#"><i class="mdi mdi-cube-outline"></i>Movimiento</a>
					<ul class="submenu">

						<li><a href="email-inbox.php">Realizar Venta</a></li>
						<li><a href="email-read.php">Despachar Pedido</a></li>
						<li><a href="email-read.php">Realizar Corte</a></li>
					</ul>
				</li>
				<li class="has-submenu">
					<a href="#"><i class="mdi mdi-google-pages"></i>Ayuda
					</a>
					<ul class="submenu megamenu">
						<li>
							<ul>
								<li><a href="pages-login.php">Manual de Usuario</a></li>
								<li><a href="pages-login.php">Backup</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="has-submenu">
					<a href="#"><i class="mdi mdi-cart-outline"></i>INFORMES</a>
					<ul class="submenu">
						<li><a href="ecommerce-product-list.php">Clientes</a></li>
						<li><a href="ecommerce-product-grid.php">Proveedores</a></li>
						<li><a href="ecommerce-order-history.php">Productos</a></li>
						<li><a href="ecommerce-customers.php">Ventas</a></li>
						<li><a href="ecommerce-product-edit.php">Pedidos</a></li>
						<li><a href="ecommerce-product-edit.php">Bitacora</a></li>
					</ul>
				</li>
			</ul>
			<!-- End navigation menu -->
		</div> <!-- end #navigation -->
	</div> <!-- end container -->
</div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
