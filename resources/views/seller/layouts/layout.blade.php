

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>@yield('seller_page_title')</title>


	<link href="{{ asset('admin_asset/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Seller Dashboard</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>

					<li class="sidebar-item {{request()->routeIs('vendor')?'active':''}}">
						<a class="sidebar-link" href="{{route('vendor')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                         </a>
					</li>

					<li class="sidebar-item {{request()->routeIs('vendor.order.history')?'active':''}}">
						<a class="sidebar-link" href="{{route('vendor.order.history')}}">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Order History</span>
                         </a>
					</li>
					
					<li class="sidebar-header">
						Store
					</li>

					<li class="sidebar-item {{request()->routeIs('vendor.store')?'active':''}}">
						<a class="sidebar-link" href="{{route('vendor.store')}}">
                        <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create</span>
                         </a>
					</li>
					<li class="sidebar-item {{request()->routeIs('vendor.store.manage')?'active':''}}">
						<a class="sidebar-link" href="{{route('vendor.store.manage')}}">
                        <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                         </a>
					</li>


					<li class="sidebar-header">
						Product
					</li>

					<li class="sidebar-item {{request()->routeIs('vendor.product')?'active':''}}">
						<a class="sidebar-link" href="{{route('vendor.store')}}">
                        <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Create</span>
                         </a>
					</li>
					<li class="sidebar-item {{request()->routeIs('vendor.product.manage')?'active':''}}">
						<a class="sidebar-link" href="{{route('vendor.store.manage')}}">
                        <i class="align-middle" data-feather="list"></i> <span class="align-middle">Manage</span>
                         </a>
					</li>
					
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					

				@yield('seller_layout')

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="{{ asset('admin_asset/js/app.js') }}"></script>

</body>

</html>