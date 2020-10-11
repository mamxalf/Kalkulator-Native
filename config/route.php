<?php 
/**
 * Ini adalah file route aplikasi
 * @author     Luluk Fadiyah
 * @since      2020
 * @param      string $modul
 */

$modul = (@$_GET['m']) ?: '';

switch ($modul) {
	// modul segitiga
	case 'segitiga':
		include APP.'segitiga.php';
		break;

	case 'segitiga_add':
		include APP.'segitiga_add.php';
		break;

	case 'segitiga_edit':
		include APP.'segitiga_edit.php';
		break;

	case 'segitiga_delete':
		include APP.'segitiga_delete.php';
		break;
	case 'segitiga_exp':
		include APP.'segitiga_exp.php';
		break;
	
	// modul persegi
	case 'persegi':
		include APP.'persegi.php';
		break;

	case 'persegi_add':
		include APP.'persegi_add.php';
		break;

	case 'persegi_edit':
		include APP.'persegi_edit.php';
		break;

	case 'persegi_delete':
		include APP.'persegi_delete.php';
		break;

	case 'persegi_exp':
		include APP.'persegi_exp.php';
		break;

	// modul lingkaran
	case 'lingkaran':
		include APP.'lingkaran.php';
		break;

	case 'lingkaran_add':
		include APP.'lingkaran_add.php';
		break;

	case 'lingkaran_edit':
		include APP.'lingkaran_edit.php';
		break;

	case 'lingkaran_delete':
		include APP.'lingkaran_delete.php';
		break;
	case 'lingkaran_exp':
		include APP.'lingkaran_exp.php';
		break;
		
	default:
	include APP.'home.php';
		break;
}