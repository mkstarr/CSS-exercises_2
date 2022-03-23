<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header("Content-type:application/pdf");

	// It will be called downloaded.pdf
	header("Content-Disposition:attachment;filename='downloaded.pdf'");

	// The PDF source is in original.pdf
	readfile("original.pdf");
	//header('Location: '.$uri.'/dashboard/');
	
	
	exit;
?>
Something is wrong with the XAMPP installation :-(
