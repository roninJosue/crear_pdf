<?php

use App\Core\Template as View;
use App\Helpers\pdf;

// somewhere early in your project's loading, require the Composer autoloader
// see: http://getcomposer.org/doc/00-intro.md
require '../vendor/autoload.php';


$data = array(
	'name' => 'Reynaldo Josué Cano Bárcenas',
	'course' => 'Curso basico de Laravel'

);

$html = View::render('pdf/certificado', $data);

//pdf::render('certificate', $html);
pdf::render('certificado', $html);

?>