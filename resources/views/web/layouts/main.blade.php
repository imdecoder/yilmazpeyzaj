<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">

	@include('web.layouts.static.responsive')

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">

	@include('web.layouts.static.stylesheets')

	@include('web.layouts.static.favicon')

	@include('web.layouts.static.ie9')

	@livewireStyles
</head>
<body>
	<div class="page-wrapper">

		<livewire:web.layouts.preloader />

		<!-- Main Header -->
		<header class="main-header">

			<livewire:web.layouts.header-top />

			<livewire:web.layouts.header-upper />

			<livewire:web.layouts.header-lower />

			<livewire:web.layouts.sticky-header />

			<livewire:web.layouts.mobile-menu />

		</header>
		<!-- End Main Header -->

		@yield('content')

		<!-- Main Footer -->
		<footer class="main-footer">

			<livewire:web.layouts.footer-upper />

			<livewire:web.layouts.footer-bottom />

		</footer>
	</div>
	<!-- End pagewrapper -->

	<livewire:web.layouts.scroll-to-top />

	@include('web.layouts.static.scripts')

	@livewireScripts
</body>
</html>
