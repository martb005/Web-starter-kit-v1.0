<? include('header.php'); ?>
	<h1>Website Starter 0.1</h1>
	<!-- SVG fallback example -->
	<h2>SVG file to PNG file fallback for IE 8 -</h2>
	<h3><? echo baseURL(); ?></h3>
	<img src="img/image.svg" alt="SVG to PNG">
	<div class="test-sprite">
		<p>Set fallback for IE 8 and older browsers in old-ie.less to replace SVG sprite to PNG</p>
	</div>
	<!-- Contact form  example -->
	<form action="#" method="post" id="form-contact">
		<fieldset>
			<input type="text" required="required" id="name" name="name" placeholder="Nom" required>
			<input type="email" required="required" id="email" name="email" placeholder="Courriel" required>
			<textarea cols="30" rows="10" id="message" name="message" placeholder="Message" required ></textarea>
			<input type="submit" class="btn"  value="Envoyer" id="send">
		</fieldset>
	</form>
<? include('footer.php'); ?>