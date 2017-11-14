<?php  
	//config
	require_once(dirname(__FILE__).'/config.php');

	//title
	function title_reservasi(){
		global $title_reservasi;

		echo $title_reservasi;
	}

	//URL reservasi
	function url_reservasi(){
		echo ABS_URL;
	}
?>