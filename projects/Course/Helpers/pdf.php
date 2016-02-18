<?php namespace App\Helpers;

use DOMPDF as PdfComponent;

class pdf{

	protected static $configured = false;

	public static function configure()
	{
		if(static::$configured) return;

		// disable DOMPDF's internal autoloader if you are using Composer
		define('DOMPDF_ENABLE_AUTOLOAD', false);

		// include DOMPDF's default configuration
		require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';

		static::$configured = true;
	}

	public static function render($file, $html)
	{
		static::configure();

		$dompdf = new PdfComponent();
		$dompdf->load_html($html);
		$dompdf->set_paper('Letter', 'landscape');
		$dompdf->render();
		$dompdf->stream("$file.pdf");
	}
}