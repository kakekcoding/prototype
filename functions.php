<?php  
	// config
	require_once(dirname(__FILE__).'/config.php');

	// title
	function title()
	{
		global $title;

		echo $title;
	}

	// URL reservasi
	function url_reservasi()
	{
		echo ABS_URL;
	}
?>