<? include('header.php'); ?>
	<h1>Website Starter 0.1</h1>
	<!-- SVG fallback example -->
	<h2>SVG file to PNG file fallback for IE 8 -</h2>
	<img src="img/image.svg" alt="SVG to PNG">
	<!-- Contact form  example -->
	<form action="#" method="post" id="form-contact">
		<fieldset>
			<input type="text" required="required" id="name" name="name" placeholder="Nom">
			<input type="email" required="required" id="email" name="email" placeholder="Courriel">
			<textarea name="" id="" cols="30" rows="10" required="required" id="message" name="message" placeholder="Message"></textarea>
			<input type="submit" class="btn"  value="Envoyer" id="send">
		</fieldset>
	</form>
	<? echo $this->baseUrl(); ?>
<? include('footer.php'); ?>