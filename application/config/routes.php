<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['users/register'] = 'users/register';

$route['officer/login'] = 'officer/officerlogin';

$route['admin/login'] = 'admin/adminlogin';

$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';

$route['default_controller'] = 'pages/view';

$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
