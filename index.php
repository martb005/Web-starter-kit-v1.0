<? include('header.php'); ?>
	
	<div class="nav">
		<div class="container">
			<nav class="nav-collapse">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Page</a></li>
					<li><a href="#">Page</a></li>
					<li><a href="https://github.com/martb005/Website-Starter-Kit">Github</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<header>
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
					<h1>Website Starter</h1>
					<h2>Simple PHP Framework built to create new Website faster.</h2>
					<ul>
						<li>HTML5</li>
						<li>PHP</li>
						<li>CSS3</li>
						<li>LESS</li>
						<li>Responsive nav</li>
						<li>SVG to PNG fallback for old browsers (lte IE 9)</li>
						<li>jQuery</li>
						<li>HTML5 shiv for IE</li>
						<li>Simple contact form</li>
					</ul>
				</div>
				<div class="span6 text-right">
					<a class="btn" href="https://github.com/martb005/Website-Starter-Kit" alt="Download Website Starter Kit">Download</a>
				</div>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="row-fluid">
				<div class="span6">
					<h4>LESS</h4>
					<p><a href="http://lesscss.org/">LESS</a> extends CSS with dynamic behavior such as variables, mixins, operations and functions. A LESS compiler (server-side) or client-side) is needed such as <a href="http://incident57.com/less/">less.app</a> (mac) or <a href="http://lesscss.org/">LESSCSS.org</a> a jQuery plugin.</p>
					
					<h4>SVG to PNG</h4>
					<p>Old browsers such as Internet Explorer 8- does not support SVG files. A few line of javascript are used to create a fallback to replace automatically every SVG files to PNG files. Don't forget to create both images! (See index.php for example)</p>
					
					<h4>Responsive Nav</h4>
					<p>Responsive navigation plugin without library dependencies and with fast touch screen support. <a href="http://github.com/viljamis/responsive-nav.js">http://github.com/viljamis/responsive-nav.js</a></p>
					
					<h4>Hide file extension</h4>
					<p>.htaccess file is used to hide .PHP file extension to get clean URL.</p>
				</div>
				<div class="span6">
					<h4>Contact form</h4>
					<p>Simple contact form ready to use. Replace the receiver email address in sendmail.php to get this working. (See index.php for example)</p>
			
					<h4>Meta</h4>
					<p>config.php is used to add content to specific pag (Page title and page description).</p>
					<code>
							&lt;title&gt;&lt;?=$title?&gt;&lt;/title&gt;<br>
							&lt;meta name=&quot;description&quot; content=&quot;&lt;?=$description?&gt;&quot; /&gt;
					</code>
			
					<h4>Sprite grid</h4>
					<p>Sprite grid handling images faster. Specify sprite class and the position on the grid.</p>
					<code>
							.sprite(2,3);
					</code>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2>Debugging</h2>
					<h4>Base URL</h4>
					<p>Use the following code to help you to display the base URL set in config.php.</p>
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
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<h2>Responsive Grid</h2>
			<div class="row-fluid">
				<div class="span5">
					<p>Base on <a href="http://getbootstrap.com/2.3.2/">Bootstrap 2.3.2</a>. Use the "<strong>.row-fluid</strong>" class to create new responsive row. Then specify width of their child using the class "<strong>.span1</strong>, span2, span3... max span12! That represent the maximum of column who can be use in this framework".</p>
				</div>
				<div class="span7">
					<code>
						&lt;div class=&quot;row-fluid&quot;&gt;
							&lt;div class=&quot;span6&quot;&gt;
								column 1
							&lt;/div&gt;
							&lt;div class=&quot;span6&quot;&gt;
								column 2
							&lt;/div&gt;
						&lt;/div&gt;
					</code>
				</div>
			</div>
		</div>
		
	</div>
	</section>

	<section>
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2>Responsive Video</h2>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="embed-container">
						<iframe width="560" height="315" src="//www.youtube.com/embed/WQPfQvLIseA?list=FL0Y-lCP6lRqyQi_FzHpsWeQ" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="span6">
					<p>Wrap the iframe tags with a div and add it ".embed-container" CSS class as the exemple below.</p>
					<code>
						&lt;div class=&quot;embed-container&quot;&gt;
							&lt;iframe src=&quot;http://website.abc/yourembedvideoiframe&quot; frameborder=&quot;0&quot; webkitAllowFullScreen mozallowfullscreen allowFullScreen&gt;&lt;/iframe&gt;
						&lt;/div&gt;
					</code>
				</div>
			</div>
		</div>
	</section>
			
	<section>
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h2>SVG to PNG</h2>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<img src="img/image.svg" alt="SVG to PNG" width="1000" height="560">
				</div>
				<div class="span6">
					<h4>Automatic SVG to PNG replacement</h4>
					<p>All SVG items are replaced by a PNG file in Internet Explorer 8 and less (Both SVG and PNG files are required in images folder).</p>
					<h4>SVG Sprite fallback</h4>
					<div class="test-sprite"></div>
					<p>This icon is a part of a sprite. Set fallback for IE 8 and older browsers in old-ie.less to replace SVG sprite to PNG (Both SVG and PNG files are required in images folder)</p>
				</div>
			</div>
		</div>
	</section>
			
	<section>
		<div class="container">
			<div class="row-fluid">
				<div class="span8">
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
				<div class="span4">
					<h2>Contact Form</h2>
					<form action="#" method="post" id="form-contact">
						<fieldset>
							<input class="input-large" type="text" required="required" id="name" name="name" placeholder="Name" required>
							<input class="input-large" type="email" required="required" id="email" name="email" placeholder="Email" required>
							<textarea class="input-large" cols="30" rows="10" id="message" name="message" placeholder="Message" required ></textarea>
							<input type="submit" class="btn"  value="Send" id="send">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>

<? include('footer.php'); ?>