<!DOCTYPE html>
<? include('config.php'); ?>
<html lang="fr">
	<head>
		<title><?=$title?></title>
		<meta name="description" content="<?=$description?>" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Author Name">
		<!-- Meta Opengraph -->
		<meta property="og:title" content="<?=$title?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<? echo baseURL(); ?>" />
		<meta property="og:image" content="<? echo baseURL(); ?>img/opengraph.png" />
		<meta property="og:description" content="<?=$description?>" />
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="css/style.css" media="all">
		<!--[if lte IE 8]>
		  <link type="text/css" rel="stylesheet" href="css/old-ie.css" media="all">
		<![endif]-->
	</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	<div id="wrapper">