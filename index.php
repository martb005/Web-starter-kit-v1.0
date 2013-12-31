<? include('header.php'); ?>

	<header>
		<div class="container">
			<nav class="nav-collapse">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section>
		<div class="container">
			<h1>Website Starter</h1>
			
			<!-- Display base URL -->
			<p><strong>Current file:</strong> <span class="link"><? echo baseURL(); ?></span></p>
		</div>
	</section>
			
	<section>
		<div class="container">
			<!-- SVG fallback example -->
			<h2>SVG to PNG</h2>
			<h4>Automatic SVG to PNG replacement</h4>
			<p>The SVG image below is replaced to PNG for Internet Explorer 8 and less (Both SVG and PNG files are required in images folder).</p>
			<img src="img/image.svg" alt="SVG to PNG" width="1000" height="560">
			<h4>SVG Sprite fallback</h4>
			<div class="test-sprite"></div>
			<p>This icon is a part of a sprite. Set fallback for IE 8 and older browsers in old-ie.less to replace SVG sprite to PNG (Both SVG and PNG files are required in images folder)</p>
		</div>
	</section>
			
	<section>
		<div class="container">
			<!-- Contact form  example -->
			<form action="#" method="post" id="form-contact">
				<fieldset>
					<input type="text" required="required" id="name" name="name" placeholder="Name" required>
					<input type="email" required="required" id="email" name="email" placeholder="Email" required>
					<textarea cols="30" rows="10" id="message" name="message" placeholder="Message" required ></textarea>
					<input type="submit" class="btn"  value="Envoyer" id="send">
				</fieldset>
			</form>
		</div>
	</section>

<? include('footer.php'); ?>