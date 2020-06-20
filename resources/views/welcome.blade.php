<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Writer</title>
        <head>
            <title>Industrious by TEMPLATED</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <link rel="stylesheet" href="css/main.css" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="is-preload">
       

            <div class="content">
                <!-- Header -->
			
                
		<!-- Nav -->
		

		<!-- Banner -->
			

		<!-- Highlights -->
			
          
        <!-- CTA -->
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			<section id="cta" class="wrapper">
                
				<div class="inner">
					<h2>EDIFY!</h2>
					<p>Post and Share your ideas with all!</p>
                </div>
                
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>All in one  platform for sharing knowledge</h2>
						<p>Be it Technical or non technical,career related or any day to day related event share your knowledge and opinion with all</p>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Great place to gain and share knowledge.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										
									</div>
									<p class="credit">- <strong>Jane</strong> <span>Writer</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Best feature is ability to see the stats of the article for me.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										
									</div>
									<p class="credit">- <strong>Doe</strong> <span>Business Professional.</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>Learnt alot from the Technical articles and excellent community overall.</p>
								</blockquote>
								<div class="author">
									<div class="image">
										
									</div>
									<p class="credit">- <strong>Janet</strong> <span>UnderGrad Student</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Connect !</h3>
							<p>Real knowledge is to know the extent of one's ignorance. The true sign of intelligence is not knowledge but imagination. To know what you know and what you do not know, that is true knowledge. Those who have knowledge, don't predict</p>
						</section>
						
						<section>
							<h4>Contact</h4>
							<ul class="plain">
								
								<li><a href="https://github.com/RIYA3004"><i class="icon fa-github">&nbsp;</i>Github</a></li>
								
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy;  Riya Suri</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            </div>
        </div>
    </body>
</html>
