<?
	//Detect current page and pass in specific content
	$thisFilename = end(explode('/', $_SERVER['PHP_SELF'])); 

	switch ($thisFilename) {
		case "index.php":
			$title = "Title";
			$description = "Description";
			break;
		default:
			$title = "Another Title";
			$description = "Description";
			break;
	}
?>