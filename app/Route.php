<?php

use App\Controllers\Client\Error;

$app->router->notFound(function () {
	$error = new Error();
	return $error->index();
});

$app->router->get('/', 'Client.Home@index');
$app->router->get('/hakkimizda', 'Client.About@index');

$app->router->group('/hizmetler', function ($router) {
	$router->get('/', 'Client.Services@index');
	$router->get('/detay', 'Client.Services@detail');
});

$app->router->group('/referanslar', function ($router) {
	$router->get('/', 'Client.References@index');
	$router->get('/detay', 'Client.References@detail');
});

$app->router->group('/blog', function ($router) {
	$router->any('/', 'Client.Blog@index');
	$router->get('/detay', 'Client.Blog@detail');
	$router->get('/kategori', 'Client.Blog@category');
	$router->get('/etiket', 'Client.Blog@tag');
});

$app->router->group('/magaza', function ($router) {
	$router->any('/', 'Client.Store@index');
	$router->get('/urun', 'Client.Store@product');
	$router->get('/kategori', 'Client.Store@category');
	$router->get('/sepet', 'Client.Store@cart');
	$router->get('/odeme', 'Client.Store@checkout');

	$router->group('/hesabim', function ($router) {
		$router->any('/', 'Client.Store@account_detail');
		$router->any('/giris-yap', 'Client.Store@account_login');
		$router->any('/kayit-ol', 'Client.Store@account_register');
		$router->any('/sifremi-unuttum', 'Client.Store@account_forgot');
	}, ['before' => 'CustomerCheckAuth']);
});

$app->router->get('/iletisim', 'Client.Contact@index');
$app->router->get('/sss', 'Client.Faq@index');

$app->router->group('/admin', function ($router) {
	$router->get('/', function () {
		header('Location: ' . site_url('admin/dashboard'));
		exit;
	});

	$router->any('/login', 'Admin.Auth.Login@index');
	$router->any('/logout', 'Admin.Auth.Logout@index');

	$router->get('/dashboard', 'Admin.Dashboard@index');
}, ['before' => 'UserCheckAuth']);

$app->router->group('/api', function ($router) {

	// TODO

});
