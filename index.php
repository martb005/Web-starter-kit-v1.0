<? include('header.php'); ?>

	<!--[if lte IE 8]>
	<div id="ie" style="text-align: center; height: 50px; line-height: 50px;">
		Ce site n'est pas optimis&eacute; pour Internet Explorer 8 et moins, veuillez faire une <a href="http://www.microsoft.com/internetexplorer">mise &agrave; jour</a> ou t&eacute;l&eacute;chargez <a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a> ou <a href="http://www.google.com/chrome">Google Chrome</a>
	</div>
	<![endif]-->
	
	<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
	 	<div class="container">
	 		<div class="navbar-header">
	 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#home">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#features">Caractéristiques</a></li>
					<li><a href="#documentation">Documentation</a></li>
					<li><a href="#gallery">Galerie</a></li>
					<li class="external"><a href="https://github.com/martb005/Website-Starter-Kit">Télécharger</a></li>
					<li class="external"><a href="https://github.com/martb005/Website-Starter-Kit">Github</a></li>
				</ul>
			</div>
	 	</div>
	 </nav>

	<header id="home">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<h1>Trousse de départ <br class="hidden-sm">d’un site Web</h1>
					<h2>Un simple framework basé sur Bootstrap&nbsp;3.0 pour économiser du temps lors de la création d’un site Web</h2>
				</div>
				<div class="col-xs-12 col-md-4 text-right">
					<a class="btn" href="https://github.com/martb005/Website-Starter-Kit" alt="Download Website Starter Kit">Télécharger</a>
				</div>
			</div>
		</div>
	</header>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				</div>
				<div class="col-sm-6">
					<h4>LESS</h4>
					<p><a href="http://lesscss.org/">LESS</a> extends CSS with dynamic behavior such as variables, mixins, operations and functions. A LESS compiler (server-side) or client-side) is needed such as <a href="http://incident57.com/less/">less.app</a> (mac) or <a href="http://lesscss.org/">LESSCSS.org</a> a jQuery plugin.</p>
					
					<h4>SVG to PNG</h4>
					<p>Old browsers such as Internet Explorer 8- does not support SVG files. A few line of javascript are used to create a fallback to replace automatically every SVG files to PNG files. Don't forget to create both images! (See index.php for example)</p>
					
					<h4>Responsive Navbar</h4>
					<p><a href="http://getbootstrap.com/components/#navbar">Bootstrap 3.0 Navbars</a> are responsive meta components that serve as navigation headers for your application or site. They begin collapsed (and are toggleable) in mobile views and become horizontal as the available viewport width increases.</p>
					
					<h4>Contact form</h4>
					<p>Simple contact form ready to use. Replace the receiver email address in sendmail.php to get this working. (See index.php for example)</p>
				</div>
				<div class="col-sm-6">
					<h4>Hide file extension</h4>
					<p>.htaccess file is used to hide .PHP file extension to get clean URL.</p>		

					<h4>Responsive Grid</h4>
					<p><a href="http://getbootstrap.com/css/#grid">Bootstrap 3.0 Grid systems</a> are used for creating page layouts through a series of rows and columns that house your content.</p>	

					<h4>Scrollspy</h4>
					<p>The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.</p>

					<h4>Magnific Popup</h4>
					<p>Fast, light and responsive lightbox plugin, for jQuery and Zepto.js.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="documentation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Documentation</h2>

					<h4>Base URL</h4>
					<p>Use to display the base URL set in config.php.</p>
					<code>
						&lt;? echo baseURL(); ?&gt;
					</code>
					<p><strong>Base URL:</strong> <span class="link"><? echo baseURL(); ?></span></p>
					<hr>

					<h4>Current file</h4>
					<p>Use the following code to display the current file.</p>
					<code>
						&lt;? echo basename($_SERVER[&#039;PHP_SELF&#039;]); ?&gt;
					</code>
					<p><strong>Current file:</strong> <span class="link"><? echo basename($_SERVER['PHP_SELF']); ?></span></p>
					<hr>

					<h4>Meta</h4>
					<p>config.php is used to add content to specific pag (Page title and page description).</p>
					<code>
						&lt;title&gt;&lt;?=$title?&gt;&lt;/title&gt;<br>
						&lt;meta name=&quot;description&quot; content=&quot;&lt;?=$description?&gt;&quot; /&gt;
					</code>
					<hr>

					<h4>Sprite grid</h4>
					<p>Sprite grid handling images faster. Specify sprite class and the position on the grid.</p>
					<code>
						.sprite(2,3);
					</code>
					<hr>

					
				</div>
				
				<div class="col-sm-12">
					<div class="demo">
						<h4>Responsive Grid</h4>
					<p>Based on <a href="http://getbootstrap.com/">Bootstrap 3.0</a>.</p>
						<div class="row">
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
							<div class="col-sm-1">.col-sm-1</div>
						<div class="col-sm-1">.col-sm-1</div>
						</div>
						<div class="row">
							<div class="col-sm-8">.col-sm-8</div>
							<div class="col-sm-4">.col-sm-4</div>
						</div>
						<div class="row">
							<div class="col-sm-4">.col-sm-4</div>
							<div class="col-sm-4">.col-sm-4</div>
							<div class="col-sm-4">.col-sm-4</div>
						</div>
						<div class="row">
							<div class="col-sm-6">.col-sm-6</div>
							<div class="col-sm-6">.col-sm-6</div>
						</div>
					</div>
					<code>
						&lt;div class=&quot;row&quot;&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-8&quot;&gt;.col-sm-8&lt;/div&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>
						&lt;/div&gt;<br>
						&lt;div class=&quot;row&quot;&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-4&quot;&gt;.col-sm-4&lt;/div&gt;<br>
						&lt;/div&gt;<br>
						&lt;div class=&quot;row&quot;&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-6&quot;&gt;.col-sm-6&lt;/div&gt;<br>
							&nbsp;&nbsp;&lt;div class=&quot;col-sm-6&quot;&gt;.col-sm-6&lt;/div&gt;<br>
						&lt;/div&gt;<br>
					</code>
					<hr>
				</div>
				
				<div class="col-sm-12">
					<h4>Scrollspy</h4>
					<p>The ScrollSpy plugin is for automatically updating nav targets based on scroll position. Scroll the area below the navbar and watch the active class change. The dropdown sub items will be highlighted as well.</p>
					<h5>Usage: Via data attributes</h5>
					<p>To easily add scrollspy behavior to your topbar navigation, add data-spy="scroll" to the element you want to spy on (most typically this would be the &lt;body&gt;). Then add the data-target attribute with the ID or class of the parent element of any Bootstrap .nav component.</p>
					<h5>Usage: Via JavaScript</h5>
					<code>
						&lt;body data-spy=&quot;scroll&quot; data-target=&quot;.navbar-example&quot;&gt;<br>
						  &nbsp;&nbsp;...<br>
						  &nbsp;&nbsp;&nbsp;&nbsp;&lt;div class=&quot;navbar-example&quot;&gt;<br>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul class=&quot;nav nav-tabs&quot;&gt;<br>
						  &nbsp;&nbsp;...<br>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;<br>
						  &nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>
						  &nbsp;&nbsp;...<br>
						&lt;/body&gt;<br>
					</code>
					<hr>
				</div>

				<div class="col-sm-12">
					<h4>Responsive Video</h4>
				</div>
				<div class="col-sm-6">
					<div class="embed-container">
						<iframe width="560" height="315" src="//www.youtube.com/embed/WQPfQvLIseA?list=FL0Y-lCP6lRqyQi_FzHpsWeQ" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-6">
					<p>Wrap the iframe tags with a div and add it ".embed-container" CSS class as the exemple below.</p>
					<code>
						&lt;div class=&quot;embed-container&quot;&gt;
							&lt;iframe src=&quot;http://website.abc/yourembedvideoiframe&quot; frameborder=&quot;0&quot; webkitAllowFullScreen mozallowfullscreen allowFullScreen&gt;&lt;/iframe&gt;
						&lt;/div&gt;
					</code>
				</div>
				<div class="clearfix"></div>
				<hr>

				<div class="col-sm-12">
					<h4>SVG to PNG</h4>
				</div>
				<div class="col-sm-6">
					<a href="img/image-01.svg" class="image-lightview">
						<img src="img/image-01.svg" alt="SVG to PNG" width="1000" height="560">
					</a>
				</div>
				<div class="col-sm-6">
					<h4>Automatic SVG to PNG replacement</h4>
					<p>All SVG items are replaced by a PNG file in Internet Explorer 8 and less (Both SVG and PNG files are required in images folder).</p>
					<h4>SVG Sprite fallback</h4>
					<div class="test-sprite"></div>
					<p>This icon is a part of a sprite. Set fallback for IE 8 and older browsers in old-ie.less to replace SVG sprite to PNG (Both SVG and PNG files are required in images folder)</p>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
	</section>

	<section id="gallery">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Galerie d’images</h2>
					<ul class="image-gallery">
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumbnail"><a href="img/image-01.svg" title="Lorem ipsum dolor sit amet"><img src="img/image-01.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumbnail"><a href="img/image-02.svg"><img src="img/image-02.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumbnail"><a href="img/image-01.svg"><img src="img/image-01.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumbnail"><a href="img/image-02.svg"><img src="img/image-02.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 thumbnail"><a href="img/image-01.svg"><img src="img/image-01.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs thumbnail"><a href="img/image-02.svg"><img src="img/image-02.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs thumbnail"><a href="img/image-01.svg"><img src="img/image-01.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs thumbnail"><a href="img/image-02.svg"><img src="img/image-02.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs hidden-sm thumbnail"><a href="img/image-01.svg"><img src="img/image-01.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs hidden-sm hidden-md thumbnail"><a href="img/image-02.svg"><img src="img/image-02.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs hidden-sm hidden-md thumbnail"><a href="img/image-01.svg"><img src="img/image-01.svg" alt="SVG to PNG" width="250" height="140"></a></li>
						<li class="col-xs-12 col-sm-6 col-md-4 col-lg-3 hidden-xs hidden-sm hidden-md thumbnail"><a href="img/image-02.svg"><img src="img/image-02.svg" alt="SVG to PNG" width="250" height="140"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
			
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>H1 Lorem ipsum dolor sit amet</h1>
					<h2>H2 Quisque dignissim metus velit</h2>
					<h3>H3 Maecenas neque sapien</h3>
					<h4>H4 Sed aliquam nunc a lectus laoreet adipiscing</h4>
					<h5>H5 Proin at nibh laoreet mattis augue ac</h5>
					<h6>H6 Etiam pharetra massa a fringilla</h6>
					<blockquote>Blocquote lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, quisquam commodi iusto dicta numquam perspiciatis voluptate eum veritatis suscipit sed fuga tempore facilis! Magnam eveniet maxime iusto voluptates quibusdam quam.</blockquote>
					<p>Paragraph Lorem ipsum dolor sit amet, <strong>strong</strong> consectetur adipisicing elit. Natus, incidunt nihil deleniti exercitationem autem. Itaque, veniam, cum quod error accusantium officiis quis ab quaerat laudantium perferendis assumenda dolorum delectus porro.</p>
					<p>Paragraph Quisque dignissim metus velit, vitae blandit felis iaculis a. Vestibulum in <a href="#">hyperlink</a> vestibulum quam. Phasellus non enim non velit convallis vehicula. Phasellus congue ligula non gravida vestibulum. Aenean blandit nibh vitae nisi dignissim aliquam. Sed sit amet tortor nec lacus malesuada elementum fringilla nec elit. Duis ut euismod erat.</p>
					<p>
						<ul>
							<li>Liste item phasellus eu lectus porta, interdum dui eu, aliquam tortor.</li>
							<li>Liste item duis non nulla ut ligula luctus lacinia.</li>
							<li>Liste item etiam pharetra massa a fringilla condimentum.</li>
							<li>Liste item suspendisse quis erat id libero faucibus adipiscing.</li>
						</ul>
					</p>
				</div>
				<div class="col-sm-4">
					<h2>Contact Form</h2>
					<form action="#" method="post" id="form-contact">
						<fieldset>
							<input type="text" required="required" id="name" name="name" placeholder="Name" required>
							<input type="email" required="required" id="email" name="email" placeholder="Email" required>
							<textarea cols="30" rows="10" id="message" name="message" placeholder="Message" required ></textarea>
							<input type="submit" class="btn"  value="Send" id="send">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>

<? include('footer.php'); ?>