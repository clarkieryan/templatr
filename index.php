<?php
	// This is a simple test page for the template engine
	//Include the templatae engine
	include_once('lib/templatr.php');
	//Start a new instance
	$templatr = new templatr('templates/', '.tpl',  '/templatr/');

	//Check the URI and output the appropriate page
	switch ($templatr->getURI()) {
		case 'test':
			//Some logic here
			$templatr->title = "Test page";
			$templatr->data = array("test" => array("test", "test2"));

			//Render the page
			$templatr->render('index');
			break;
		
		default:
			$templatr->title = "Test page";
			$templatr->data = array("test" => array("test", "test2"));
			$templatr->render('index');
			break;
	}

	// We can add some logic into PHP using the current URL option to get the URL and render the right page
	// Could pull in some sort of controller at the same time

?>