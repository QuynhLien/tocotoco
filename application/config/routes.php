<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Rewrite route to have url friendly and have to place this on top
$route['translate_uri_dashes'] = TRUE;
$route['san-pham/(:any)'] = 'SanPham/index/$1';
$route['san-pham/(:any)/(:any)'] = 'SanPham/index/$1/$2';
$route['gio-hang'] = 'GioHang';

//Admin
$route['admin'] = 'Admin/Dashboard';
$route['admin/index'] = 'Admin/Dashboard/index';
$route['admin/signin'] = 'Admin/Signin';
$route['admin/menu'] = 'Admin/Menu';
$route['admin/san-pham'] = 'Admin/SanPham';
$route['admin/don-hang'] = 'Admin/DonHang';
$route['admin/hoa-don'] = 'Admin/HoaDon';
$route['admin/khuyen-mai'] = 'Admin/KhuyenMai';
$route['admin/cua-hang'] = 'Admin/CuaHang';



$route['default_controller'] = 'Home';
$route['404_override'] = '';