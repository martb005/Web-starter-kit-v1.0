<?
	//Detect current page and pass in specific content
	$thisFilename = end(explode('/', $_SERVER['PHP_SELF'])); 

	switch ($thisFilename) {
		case "index.php":
			$title = "Website Starter Kit"; // Add specifique browser page title for homepage
			$description = "Description"; // Add specifique page description for homepage
			break; // Duplicate PHP case to add title or description for other specific page then replace the file name
		default:
			$title = "Another Title"; // Add specifique browser page title for all page except homepage
			$description = "Description"; // Add specifique page description for all page except homepage
			break;
	};

	function baseURL() {
	$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
	return $pageURL;
	};

?>