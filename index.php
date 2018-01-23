<?php include "includes/header.php"; ?>
	
		<div class="left-col">
			<div class="left-col-wrapper">
				<div class="logo-wrapper">
					<a href="#home"><img src="img/logo.png" class="agamotto-logo-img" alt="RizePoint"></a>
				</div>
				<nav>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#config">Config File</a></li>
						<li><a href="#extends">Extends</a></li>
						<li><a href="#colors">Colors</a></li>
						<li><a href="#gradients">Gradients</a></li>
						<li><a href="#headings">Headings</a></li>
						<li><a href="#typography">Typography</a></li>
						<li><a href="#elements">Display Elements</a></li>
						<li><a href="#circles">Circle Icons</a></li>					
						<li><a href="#parallax">Parralaxing</a></li>
						<li><a href="#buttons">Buttons</a></li>
						<li><a href="http://style.rizepoint.com/branding/branding.pdf" target="_blank">Brand Guide</a></li>
					</ul>
				</nav>
<!--
				<div class="style-guide-opt">
					<div class="opt-btn">
						<a href="#" class="btn btn-green">Marketing</a>
					</div>
					<div class="opt-btn">
						<a href="#" class="btn btn-purple">Engineerings</a>
					</div>
				</div>
-->
				<div class="guide-info">
					<span class="copyright">
						<span><i>V.2.0</i></span><br>
						<i>2017 &copy; RizePoint.com</i>
					</span>
				</div>
			</div>
		</div>
		<div class="right-col">
			<div class="right-col-wrapper">
				<section class="card" id="home">
					<div class="green-blue card-wrapper vishanti-wrapper">
						<h1 class="white-text vishanti-header">The Vishanti | RizePoint's Internal Framework</h1>
						<div class="agamotto-logo">
							<img src="img/agamotto-tranparent.png" class="agamotto-img" alt="The Eye of Agamotto">
						</div>
					</div>
				</section>
				<section class="card" id="welcome">
					<div class="card-wrapper">
						<h2 class="green-text">Site of Vishanti</h2>
						<p>Vishanti is RizePoint's internal CSS framework. This framework is built off of Bootstrap v3.3.7 and Normalize.css. The framework is built in SASS. The purpose behind this style guide is to help reduce development time, reduce code space and to unifiy the RizePoint branding experience.</p>
						<p>This style guide will also include notes regarding certain parts of the code for future developers.</p>
						<p>This style guide is for internal use only, and is only visible inside the RizePoint network. As the framework develops, so will the documentation.</p>
					</div>
				</section>
				
				<section class="card" id="colors">
					<div class="card-wrapper">
						<h2 class="green-text">Colors</h2>
						<div class="info-box">
							<p>Colors are automatically set using SASS and CSS calls. When you are building out an element in HTML, you can simply call the color text or color background to use the specificied color. You can also call the colors with SASS if you find yourself in a situation that doesn't allow you to call the text or background-color.</p>
							<p>The colors for the individual color hoverovers are represented when you hoverover the color.</p>
						</div>
						
						<div class="color-box orangeOne-bg white-text">
							<div class="col-md-3 color-info">
								<h4>OrangeOne</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #FC842A</li>
									<li>RGB: rgb(252,132,42)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$orangeOne</li>
									<li>$orangeOne-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.orangeOne-text</li>
									<li>.orangeOne-bg</li>
								</ul>
							</div>
						</div><!-- orangeOne -->
						
						<div class="color-box orangeTwo-bg white-text">
							<div class="col-md-3 color-info">
								<h4>OrangeTwo</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #FCB040</li>
									<li>RGB: rgb(252,176,64)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$orangeTwo</li>
									<li>$orangeTwo-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.orangeTwo-text</li>
									<li>.orangeTwo-bg</li>
								</ul>
							</div>
						</div><!-- orangeTwo -->
						
						<div class="color-box orangeThree-bg white-text">
							<div class="col-md-3 color-info">
								<h4>OrangeThree</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #F4C540</li>
									<li>RGB: rgb(244,197,64)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$orangeThree</li>
									<li>$orangeThree-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.orangeThree-text</li>
									<li>.orangeThree-bg</li>
								</ul>
							</div>
						</div><!-- orangeThree -->
						
						<div class="color-box yellow-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Yellow</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #F7D569</li>
									<li>RGB: rgb(247,213,105)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$yellow</li>
									<li>$yellow-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.yellow-text</li>
									<li>.yellow-bg</li>
								</ul>
							</div>
						</div><!-- yellow -->
						
						<div class="color-box purple-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Purple</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #A15A95</li>
									<li>RGB: rgb(161,90,149)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$purple</li>
									<li>$purple-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.purple-text</li>
									<li>.purple-bg</li>
								</ul>
							</div>
						</div><!-- purple -->
						
						<div class="color-box blue-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Blue</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #59BEC9</li>
									<li>RGB: rgb(89,190,201)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$blue</li>
									<li>$blue-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.blue-text</li>
									<li>.blue-bg</li>
								</ul>
							</div>
						</div><!-- blue -->
						
						<div class="color-box green-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Green</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #28B29A</li>
									<li>RGB: rgb(40,178,154)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$green</li>
									<li>$green-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.green-text</li>
									<li>.green-bg</li>
								</ul>
							</div>
						</div><!-- green -->
						
						<div class="color-box pink-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Pink</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #E76B7C</li>
									<li>RGB: rgb(231,107,124)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$pink</li>
									<li>$pink-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.pink-text</li>
									<li>.pink-bg</li>
								</ul>
							</div>
						</div><!-- pink -->
						
						<div class="color-box black-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Black</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #2C2929</li>
									<li>RGB: rgb(44,41,41)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$black</li>
									<li>$black-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.black-text</li>
									<li>.black-bg</li>
								</ul>
							</div>
						</div><!-- black -->
						
						<div class="color-box gray-bg white-text">
							<div class="col-md-3 color-info">
								<h4>Gray</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #6B6B6B</li>
									<li>RGB: rgb(107,107,107)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$gray</li>
									<li>$gray-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.gray-text</li>
									<li>.gray-bg</li>
								</ul>
							</div>
						</div><!-- gray -->
						
						<div class="color-box lightGray-bg">
							<div class="col-md-3 color-info">
								<h4>LightGray</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #FAFAFA</li>
									<li>RGB: rgb(250,250,250)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$lightGray</li>
									<li>$lightGray-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.lightGray-text</li>
									<li>.lightGray-bg</li>
								</ul>
							</div>
						</div><!-- orangeOne -->
						
						<div class="color-box white-border">
							<div class="col-md-3 color-info">
								<h4>White</h4>
							</div>
							<div class="col-md-3 color-info">
								<h4>Color Values</h4>
								<ul>
									<li>HEX: #FFFFFF</li>
									<li>RGB: rgb(255,255,255)</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>SASS Variables</h4>
								<ul>
									<li>$white</li>
									<li>$white-hover</li>
								</ul>
							</div>
							<div class="col-md-3 color-info">
								<h4>Class Calls</h4>
								<ul>
									<li>.white-text</li>
									<li>.white-bg</li>
								</ul>
							</div>
						</div><!-- orangeOne -->
						
					</div>
				</section>
				
				<section class="card" id="config">
					<div class="card-wrapper">
						<h2 class="green-text">Config.php</h2>
						<div class="info-box">
							<p>The config file includes defined paths to help the developer keep the URL's relative.</p>
							
							<h3 class="purple-text">Defined PHP Paths</h3>
							<p><b>ROOT</b>: https://rizepoint.com/wp-content/themes/tribunal/</p>
							<p><b>ROOT_URL</b>: https://rizepoint.com</p>
						</div>
					</div>
				</section>
				
				<section class="card" id="extends">
					<div class="card-wrapper">
						<h2 class="green-text">Extends</h2>
						<div class="info-box">
							<p>@extends in SASS help reduce CSS code and keeps specific styling unified acrros the site. Here are a list of extends that you can use:</p>
							<ul>
								<li><span class="green-text">@box-shadow</span>: Box-shadow is the drop shadow that you can find on the buttons at the bottom of this page.</li>
								<li><span class="green-text">@text-shadow</span>: Text-shadow is the shadow behind text that usually rests ontop of an image or solid background.</li>
								<li><span class="green-text">@parallax</span>: Parallax is for banner that use parallax scrolling. Scroll down to the Banners section to learn how to set that up.</li>
							</ul>
						</div>
					</div>
				</section>
				
				<section class="card" id="gradients">
					<div class="card-wrapper">
						<h2 class="green-text">Gradients</h2>
						<div class="info-box">
							<p>Graidents are used as banner images. These graidents are produced with CSS3, and are not images. Below are the different various graident types generated. You can add the class inside a div to produce these graidents.</p>
							
							<div class="graident-wrapper">
								<h3 class="green-text">Pink Yellow | .pink-yellow</h3>
								<div class="graident-height pink-yellow"></div>

								<h3 class="green-text">Yellow Pink | .yellow-pink</h3>
								<div class="graident-height yellow-pink"></div>

								<h3 class="green-text">Purple Pink | .purple-pink</h3>
								<div class="graident-height purple-pink"></div>

								<h3 class="green-text">Pink Purple | .pink-purple</h3>
								<div class="graident-height pink-purple"></div>

								<h3 class="green-text">Purple Pink Orange | .purple-pink-orange</h3>
								<div class="graident-height purple-pink-orange"></div>

								<h3 class="green-text">Orange Pink Purple | .orange-pink-purple</h3>
								<div class="graident-height orange-pink-purple"></div>

								<h3 class="green-text">Purple Blue | .purple-blue</h3>
								<div class="graident-height purple-blue"></div>

								<h3 class="green-text">Blue Purple | .blue-purple</h3>
								<div class="graident-height blue-purple"></div>

								<h3 class="green-text">Green Blue | .green-blue</h3>
								<div class="graident-height green-blue"></div>

								<h3 class="green-text">Green Yellow | .green-yellow</h3>
								<div class="graident-height green-yellow"></div>

								<h3 class="green-text">Orange Yellow | .orange-yellow</h3>
								<div class="graident-height orange-yellow"></div>

								<h3 class="green-text">Yellow Orange | .yellow-orange</h3>
								<div class="graident-height yellow-orange"></div>

								<h3 class="green-text">Green Blue Purple | .green-blue-purple</h3>
								<div class="graident-height green-blue-purple"></div>

								<h3 class="green-text">Purple Blue Green | .purple-blue-green</h3>
								<div class="graident-height purple-blue-green"></div>
							</div><!-- graident-wrapper -->
						</div>
					</div>
				</section>
				
				<section class="card" id="typography">
					<div class="card-wrapper">
						<h2 class="green-text">Typography</h2>
						<div class="info-box">
							<div class="font-wrapper">
								<div class="font gotham-book">
									<h3 class="green-text">Gotham Book | $gotham-book</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font gotham-thin">
									<h3 class="green-text">Gotham Thin | $gotham-thin</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font gotham-bold">
									<h3 class="green-text">Gotham Bold | $gotham-bold</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font gotham-ultra">
									<h3 class="green-text">Gotham Ultra | $gotham-ultra</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font round-gotham">
									<h3 class="green-text">Gotham Round | $round-gotham</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font round-italic">
									<h3 class="green-text">Gotham Round Italic | $round-italic</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font round-thin">
									<h3 class="green-text">Gotham Round Thin | $round-thin</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
								<div class="font round-ultra">
									<h3 class="green-text">Gotham Round Ultra | $round-ultra</h3>
									<span class="font-text">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span><br>
									<span class="font-text">a b c d e f g h i j k l m n o p q r s t u v w x y z</span><br>
									<span class="font-text">1 2 3 4 5 6 7 8 9 10 (! @ # $ % ^ &amp; * )</span><br>
								</div>
							</div><!-- font-wrapper -->
						</div>
					</div>
				</section>
				
				<section class="card" id="headings">
					<div class="card-wrapper">
						<h2 class="green-text">Headings</h2>
						<div class="info-box">
							<p>There are 2 types of H tags with the internal framework. The purpose behind this is to have different sizes for H tags on regular pages and blog articles. We don't want the blog article font sizes to be too large.</p>

							<div class="heading-wrapper">
								<h3 class="green-text">Heading Classes</h3>
								<p>These classes are used for H tags throughout the site excluding any articles/posts. IE blogs.</p>
								<ul>
									<li><h1 class="heading-1">Heading One | .heading-1</h1></li>
									<li><h2 class="heading-2">Heading Two | .heading-2</h2></li>
									<li><h3 class="heading-3">Heading Three | .heading-3</h3></li>
									<li><h4 class="heading-4">Heading Four | .heading-4</h4></li>
									<li><h5 class="heading-5">Heading Five | .heading-5</h5></li>
									<li><h6 class="heading-6">Heading Six | .heading-6</h6></li>
								</ul>
							</div>
							
							<div class="heading-wrapper">
								<h3 class="green-text">Regular Heading Classes</h3>
								<p>These are used for the blog, news and anything that is an article type page.</p>
								<ul>
									<li><h1>Heading One</h1></li>
									<li><h2>Heading Two</h2></li>
									<li><h3>Heading Three</h3></li>
									<li><h4>Heading Four</h4></li>
									<li><h5>Heading Five</h5></li>
									<li><h6>Heading Six</h6></li>
								</ul>
							</div>
						</div><!-- info-box -->
					</div>
				</section>
							
				<section class="card" id="elements">
					<div class="card-wrapper">
						<h2 class="green-text">Displaying Elements</h2>
						<div class="info-box">
							<h3 class="green-text">Display Block / Display None</h3>
							<p>Displaying Elements gives you the power to hide and display elements easily.</p>
							<p>There are occasisions when you will need to write some code, like a table, that is not responsive. In those cases, usually, you write the code twice. The first code is to display on a desktop or laptop screen, and the screen code is to be viewed on a mobile screen.</p>
							<p>We use the Display None and Display Block elements that will automatically show/hide these elements.</p>
							<p>For Example:</p>
							
							<div class="code-example">
								<figure class="highlight">
									<pre>
										<code class="language-html" data-lang="html">
											<span class="c-ele">&lt;table</span><span class="c-class"> class=</span><span class="c-prop">&quot;display-block&quot;</span><span class="c-ele">&gt;</span><br><span class="single-tab">...</span><br><span class="c-ele">&lt;/table&gt;</span>
										</code>
									</pre>
								</figure>
							</div>
							<div class="code-example">
								<figure class="highlight">
									<pre>
										<code class="language-html" data-lang="html">
											<span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;display-none&quot;</span><span class="c-ele">&gt;</span><br><span class="single-tab">...</span><br><span class="c-ele">&lt;/div&gt;</span>
										</code>
									</pre>
								</figure>
							</div>
							<p>In this example. We see that we have a table using the .display-block class and the div using the .display-none.</p>
							<p>.display-block displays the content up until the screensize equals <b>768px</b>.</p> 
							<p>Then .display-block will be hidden. at 768px will turn .display-none to display block.</p>
							
							<h3 class="green-text">Text Align</h3>
							<p>Text align is exactly what it sounds like.</p>
							<ul>
								<li><span class="green-text">.align-left</span></li>
								<li><span class="green-text">.align-center</span></li>
								<li><span class="green-text">.align-right</span></li>
							</ul>
						</div><!-- info-box -->
					</div>
				</section>
				
				<section class="card" id="circles">
					<div class="card-wrapper">
						<h2 class="green-text">Circle Icons</h2>
						<div class="info-box">
							<h3 class="green-text">Displaying Circle Icons</h3>
							<p>Circle icons are used frequently on the website. Usually, you will see the circles used when we display the "Gather Better, See Earlier and Act Faster" icons.</p>
							
							<div class="example-img-wrapper">
								<img src="img/new-circles.png" alt="Circles Baybee" class="ex-img">
							</div>
							
							
							
							<p>In order to use the Circle Icons. You will need to use specific classes in this HTML structure. </p>
							<ol>
								<li>Wrap everything inside a DIV <span class="green-text">.home-circle-row</span></li>
								<li>Each individual circle must be contained in <span class="green-text">.circle-wrapper</span></li>
								<li>Inside the <span class="green-text">.circle-wrapper</span> you will create a new DIV <span class="green-text">.circle-icon</span> and the color you want the icon to have. EX. <span class="green-text">.purple-bg</span></li>
								<li>Include the image and give it the <span class="green-text">.circle-icon-img</span>. This image will be the icon that displays ontop of the background color</li>
								<li>Create a new DIV outside of the <span class="green-text">.circle-icon</span>. This new DIV will be labeled <span class="green-text">.circle-header</span></li>
								<li><b><i>OPTIONAL:</i></b> You can add text underneath the Circle Headers by using a div wrapper with the class <i class="green-text">.circle-text</i></li>
							</ol>
							
							<div class="code-example">
								<figure class="highlight">
									<pre>
										<code class="language-html" data-lang="html">
											<span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;container&quot;</span><span class="c-ele">&gt;</span><br><span class="single-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;home-circle-row&quot;</span><span class="c-ele">&gt;</span><br><span class="double-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper&quot;</span><span class="c-ele">&gt;</span><br><span class="triple-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;circle-icon purple-bg&quot;</span><span class="c-ele">&gt;</span><br><span class="quad-tab"><span class="c-ele">&lt;img</span><span class="c-class"> src=</span><span class="c-prop">&quot;img.png&quot;</span> <span class="c-class"> alt=</span><span class="c-ele">&quot;&quot; </span><span class="c-class">class=</span><span class="c-prop">&quot;circle-icon-img&quot;</span><span class="c-ele">&gt;</span><br><span class="triple-tab"><span class="c-ele">&lt;/div&gt;</span></span><br></span></span><span class="triple-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;circle-header&quot;</span><span class="c-ele">&gt;</span><br><span class="quad-tab"><span class="c-ele">&lt;h4&gt;</span></span><span class="">Circle Header One</span><span class="c-ele">&lt;/h4&gt;</span><br></span><span class="triple-tab"><span class="c-ele">&lt;/div&gt;</span></span><br><span class="double-tab"><span class="c-ele">&lt;/div&gt;</span><br></span><span class="double-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper&quot;</span><span class="c-ele">&gt;</span><br><span class="triple-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;circle-icon purple-bg&quot;</span><span class="c-ele">&gt;</span><br><span class="quad-tab"><span class="c-ele">&lt;img</span><span class="c-class"> src=</span><span class="c-prop">&quot;img.png&quot;</span> <span class="c-class"> alt=</span><span class="c-ele">&quot;&quot; </span><span class="c-class">class=</span><span class="c-prop">&quot;circle-icon-img&quot;</span><span class="c-ele">&gt;</span><br><span class="triple-tab"><span class="c-ele">&lt;/div&gt;</span></span><br></span></span><span class="triple-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;circle-header&quot;</span><span class="c-ele">&gt;</span><br><span class="quad-tab"><span class="c-ele">&lt;h4&gt;</span></span><span class="">Circle Header Two</span><span class="c-ele">&lt;/h4&gt;</span><br></span><span class="triple-tab"><span class="c-ele">&lt;/div&gt;</span></span><br><span class="double-tab"><span class="c-ele">&lt;/div&gt;</span></span><br><span class="double-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;col-lg-4 col-md-4 col-sm-4 col-xs-12 circle-wrapper&quot;</span><span class="c-ele">&gt;</span><br><span class="triple-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;circle-icon purple-bg&quot;</span><span class="c-ele">&gt;</span><br><span class="quad-tab"><span class="c-ele">&lt;img</span><span class="c-class"> src=</span><span class="c-prop">&quot;img.png&quot;</span> <span class="c-class"> alt=</span><span class="c-ele">&quot;&quot; </span><span class="c-class">class=</span><span class="c-prop">&quot;circle-icon-img&quot;</span><span class="c-ele">&gt;</span><br><span class="triple-tab"><span class="c-ele">&lt;/div&gt;</span></span><br></span></span><span class="triple-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;circle-header&quot;</span><span class="c-ele">&gt;</span><br><span class="quad-tab"><span class="c-ele">&lt;h4&gt;</span></span><span class="">Circle Header Three</span><span class="c-ele">&lt;/h4&gt;</span><br></span><span class="triple-tab"><span class="c-ele">&lt;/div&gt;</span></span><br><span class="double-tab"><span class="c-ele">&lt;/div&gt;</span></span><br><span class="single-tab"><span class="c-ele">&lt;/div&gt;</span><span class="comment-out"><-- home-circle-row --></span></span><br><span class="c-ele">&lt;/div&gt;</span><span class="comment-out"><-- container --></span>
										</code>
									</pre>
								</figure>
							</div>
						</div><!-- info-box -->
					</div>
				</section>
				
				<section class="card" id="parallax">
					<div class="card-wrapper">
						<h2 class="green-text">Parallax Scrolling</h2>
						<div class="info-box">
							<p>You can create simple parallax scrolling by using the <span class="green-text">.parallax</span> class. In order to do this, you will need to use the add .parallax to the same <span class="green-text">.banner tag</span></p>
							
							<p>See the example below</p>
							
							<div class="code-example">
								<figure class="highlight">
									<pre>
										<code class="language-html" data-lang="html">
											<span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;container banner parallax test-img&quot;</span><span class="c-ele">&gt;</span><br>
												<span class="single-tab"><span class="c-ele">&lt;div</span><span class="c-class"> class=</span><span class="c-prop">&quot;banner-wrapper&quot;</span><span class="c-ele">&gt;</span></span><br>
													<span class="double-tab"></span><span class="c-ele">&lt;h1&gt;</span>Banner Messages Are Cool!<span class="c-ele">&lt;/h1&gt;</span><br>
												<span class="single-tab"><span class="c-ele">&lt;/div</span><span class="c-ele">&gt;</span></span><br>
											<span class="c-ele">&lt;/div</span><span class="c-ele">&gt;</span><br>
										</code>
									</pre>
								</figure>
							</div>
							
							<div class="container banner parallax test-img">
								<div class="banner-wrapper">
									<h1>Banner Messages Are Cool!</h1>
								</div>
							</div>
							
						</div><!-- info-box -->
					</div>
				</section>
				
				<section class="card" id="buttons">
					<div class="card-wrapper">
						<h2 class="green-text">Buttons</h2>
						<div class="info-box">
							<h3 class="green-text">RizePoint Buttons</h3>
							<p>Buttons come in different sizes for different locations on the site. By Default, you shouldn't have to use the sizes since the larger buttons are used strictly for the banners. Everything else, should just be the default size.</p>
							<p>RizePoint Buttons are built on Twitters Bootstrap buttons. Which means that each buttons must call the <span class="green-text">.btn</span> class.</p>
							
							<p><b>NOTE:</b> Do not use the color classes for the buttons. There are specific classes for buttons. You call them by <span class="green-text">.btn-</span>color. Below are the examples you can use.</p>
							<ol>
								<li><span class="green-text">.btn-orange</span></li>
								<li><span class="green-text">.btn-inverse-orange</span></li>
								<li><span class="green-text">.btn-green</span></li>
								<li><span class="green-text">.btn-inverse-green</span></li>
								<li><span class="green-text">.btn-purple</span></li>
								<li><span class="green-text">.btn-inverse-purple</span></li>
								<li><span class="green-text">.btn-blue</span></li>
								<li><span class="green-text">.btn-inverse-blue</span></li>
								<li><span class="green-text">.btn-white</span></li>
								<li><span class="green-text">.btn-inverse-white</span></li>
							</ol>
							
							<div class="button-wrapper">
								<h3 class="green-text">Large Buttons</h3>
								<ul>
									<li><span class="green-text">.btn-lg</span></li>
								</ul>
								<ul class="btn-list">
									<li><a href="#" class="btn btn-lg btn-orange">.btn .btn-lg .btn-orange</a> <a href="#" class="btn btn-lg btn-lg-ex btn-inverse-orange">.btn .btn-lg .btn-inverse-orange</a></li>
									<li><a href="#" class="btn btn-lg btn-green">.btn .btn-lg .btn-green</a> <a href="#" class="btn btn-lg btn-lg-ex btn-inverse-green">.btn .btn-lg .btn-inverse-green</a></li>
									<li><a href="#" class="btn btn-lg btn-purple">.btn .btn-lg .btn-purple</a> <a href="#" class="btn btn-lg btn-lg-ex btn-inverse-purple">.btn .btn-lg .btn-inverse-purple</a></li>
									<li><a href="#" class="btn btn-lg btn-blue">.btn .btn-lg .btn-blue</a> <a href="#" class="btn btn-lg btn-lg-ex btn-inverse-blue">.btn .btn-lg .btn-inverse-blue</a></li>
								</ul>
							</div>
							
							<div class="button-wrapper">
								<h3 class="green-text">Medium Buttons</h3>
								<ul>
									<li><span class="green-text">.btn-md</span></li>
								</ul>
								<ul class="btn-list">
									<li><a href="#" class="btn btn-md btn-orange">.btn .btn-md .btn-orange</a> <a href="#" class="btn btn-lg-ex btn-inverse-orange">.btn .btn-md .btn-inverse-orange</a></li>
									<li><a href="#" class="btn btn-md btn-green">.btn .btn-md .btn-green</a> <a href="#" class="btn btn-lg-ex btn-inverse-green">.btn .btn-md .btn-inverse-green</a></li>
									<li><a href="#" class="btn btn-md btn-purple">.btn .btn-md .btn-purple</a> <a href="#" class="btn btn-lg-ex btn-inverse-purple">.btn .btn-md .btn-inverse-purple</a></li>
									<li><a href="#" class="btn btn-md btn-blue">.btn .btn-md .btn-blue</a> <a href="#" class="btn btn-lg-ex btn-inverse-blue">.btn .btn-md .btn-inverse-blue</a></li>
								</ul>
							</div>
							
							<div class="button-wrapper">
								<h3 class="green-text">Default Buttons</h3>
								<ul class="btn-list">
									<li><a href="#" class="btn btn-orange">.btn .btn-orange</a> <a href="#" class="btn btn-inverse-orange">.btn .btn-inverse-orange</a></li>
									<li><a href="#" class="btn btn-green">.btn .btn-green</a> <a href="#" class="btn btn-inverse-green">.btn .btn-inverse-green</a></li>
									<li><a href="#" class="btn btn-purple">.btn .btn-purple</a> <a href="#" class="btn btn-inverse-purple">.btn .btn-inverse-purple</a></li>
									<li><a href="#" class="btn btn-blue">.btn .btn-blue</a> <a href="#" class="btn btn-inverse-blue">.btn .btn-inverse-blue</a></li>
								</ul>
							</div>
							
						</div><!-- info-box -->
					</div>
				</section>

				
		
			</div>
		</div>

<style>
	nav{
		padding-left: 10px;
		margin-top: 35px;
	}
	.agamotto-logo-img {
		width: 100%;
		max-width: 215px;
		padding-top: 10px;
	}
	.single-tab{
		padding-left: 20px;
	}
	.double-tab{
		padding-left: 40px;
	}
	.triple-tab{
		padding-left: 60px;
	}
	.quad-tab{
		padding-left: 80px;
	}
	.ex-img {
		padding: 20px 0;
		width: 100%;
	}
	.comment-out{
		color:#6b6b6b;
	}
	.btn-lg-ex{
		max-width: 300px !important;
	}
	.btn-list li{
		list-style: none;
		margin-bottom: 15px;
	}
	.button-wrapper {
		margin-bottom: 50px;
	}
	.btn-md {
		max-width: 220px !important;
	}
</style>


<?php include "includes/footer.php"; ?>


