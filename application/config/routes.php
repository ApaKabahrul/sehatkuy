<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['agadmigin'] = 'login/agadmigin';
	$route['edit_obat'] = 'admin/edit_obat';
$route['obat'] = 'home/data_obat';
$route['sehat'] = 'home/sehat';
	$route['manfaat_olahraga'] = 'home/manfaat_olahraga';
	$route['kebiasaan_hidup_sehat'] = 'home/kebiasaan_hidup_sehat';
	$route['tips_pola_sehat'] = 'home/tips_pola_sehat';
	$route['memelihara_ginjal'] = 'home/memelihara_ginjal';
	$route['cegah_penyakit_jantung'] = 'home/cegah_penyakit_jantung';
$route['penyakit'] = 'home/penyakit';
$route['lokasi'] = 'home/lokasi';
$route['tentang'] = 'home/tentang';


$route['404_override'] = 'controller_error';
$route['translate_uri_dashes'] = FALSE;
