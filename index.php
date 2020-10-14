<?php
$title = 'Emre Şanlı';
$motto = 'I create things.';
/*
https://open.spotify.com/user/memres-tr
https://plus.google.com/+emresanlicom
https://www.imdb.com/user/ur38625998
https://www.flickr.com/photos/memres
https://www.linkedin.com/in/memres
https://www.pinterest.com/memres
https://www.youtube.com/memres
https://soundcloud.com/memres
https://memres.wordpress.com/
https://cuteness.tumblr.com/
https://dribbble.com/memres
https://www.last.fm/memres
https://github.com/memres
https://paypal.me/memres
https://twitter.com/mes
https://vimeo.com/mes
https://vk.com/memres
https://fb.me/memres
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title><?= $title; ?></title>
		<meta name="description" content="<?= $motto; ?>"/>
		<meta property="og:title" content="<?= $title; ?>"/>
		<meta property="og:description" content="<?= $motto; ?>"/>
		<meta property="og:image" content="https://lh3.googleusercontent.com/-StBsUbLefWo/V7yKzQtbEpI/AAAAAAAABlY/UGtuL3j0SKE98yrpJ-Ch8jzciW33H3zWACMUBGAM/w640-h480-c/<?= isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']; ?>.png"/>
		<meta property="og:url" content="<?= $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<meta name="theme-color" content="#f1f1f1"/>
		<link rel="icon" href="favicon.ico"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:700|Great+Vibes&amp;subset=latin-ext"/>
		<style>
			a {
				text-decoration: none !important;
			}
			h1 {
				margin: 20px 0 0;
				font: 50px/1 'Cinzel';
			}
			h1 a {
				color: #7a7a7a !important;
			}
			h2 {
				margin: 0;
				font: 50px/1.2 'Great Vibes';
				color: #fff;
				text-shadow: 0 0 10px #7a7a7a;
			}
			h3 {
				margin: 0;
				font: 36px/1.2 'Cinzel';
				color: #7a7a7a;
				letter-spacing: 1px;
				text-transform: lowercase;
				transition: all .2s linear;
			}
			p {
				margin: 0;
				font: 15px/1.2 Georgia;
				color: #7a7a7a;
			}
			header, main {
				user-select: none;
				background: #f1f1f1;
			}
			main {
				padding: 10px 0;
			}
			footer {
				padding: 40px 0;
				background: #283135;
			}
			footer a {
				color: #f1f1f1 !important;
			}
			footer .fa-stack-1x {
				color: #283135;
			}
			footer i {
				transition: all .4s ease;
				transform: rotate(0);
			}
			footer a:hover i {
				transform: rotate(360deg);
			}
			ins {
				display: block;
			}
			@media (max-width: 500px) {
				.ad {
					border: 0;
					padding: 0;
				}
			}
			@media (min-width: 800px) {
				.fa-2x {
					font-size: 3em;
				}
			}
		</style>
	</head>
	<body>
		<header>
			<div class="container">
				<div class="row text-center">
					<h1><a href="./"><?= $title; ?></a></h1>
					<h2><?= $motto; ?></h2>
				</div>
			</div>
		</header>
		<main>
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="https://video.emresanli.com/">
								<img src="https://lh3.googleusercontent.com/-Jk9Xv4iX0m0/XXaNqnW4C9I/AAAAAAAACS4/3LwjCxnCp-oamN17WZSlchb9wB1z2t4JQCDMYAw/s750/video.png" alt="Video"/>
								<div class="caption">
									<h3>Video</h3>
									<p>Watch ad-free YouTube videos.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="https://film.emresanli.com/">
								<img src="https://lh3.googleusercontent.com/-R7MjBw1NlR8/XgxS_wi_0GI/AAAAAAAACZA/o-nE44YdmQ0cv_DeP7A6A_v6iJ-0jM0uwCDMYAw/s750/film.png" alt="Film"/>
								<div class="caption">
									<h3>Film</h3>
									<p>Access high resolution movie archive.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="thumbnail ad">
							<ins class="adsbygoogle" data-ad-client="ca-pub-0656015397250476" data-ad-slot="1441806093" data-ad-format="auto" data-full-width-responsive="true"></ins>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="https://music.emresanli.com/">
								<img src="https://lh3.googleusercontent.com/-LJYtt-p3S1U/Xg2r-YzAJLI/AAAAAAAACbc/JNZ6unEeXkUUBKyWcktvC6bqNVpbMeHAACDMYAw/s750/music.png" alt="Music"/>
								<div class="caption">
									<h3>Music</h3>
									<p>Listen to hit music of the world.</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="thumbnail">
							<a href="https://blog.emresanli.com/">
								<img src="https://lh3.googleusercontent.com/-vIx_Na4egII/Xg2r-ctD3LI/AAAAAAAACbc/NE0nmvBXc_oRvHZl2v8XbWVzJTDEBHl7gCDMYAw/s750/blog.png" alt="Blog"/>
								<div class="caption">
									<h3>Blog</h3>
									<p>Here I rarely publish some stuff.</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="container">
				<div class="row text-center">
					<div class="col-xs-3">
						<div class="row">
							<a href="mailto:hello@emresanli.com">
								<span class="fa-stack fa-2x">
									<i class="fas fa-square fa-stack-2x"></i>
									<i class="fas fa-envelope fa-stack-1x"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="row">
							<a href="https://github.com/memres">
								<span class="fa-stack fa-2x">
									<i class="fas fa-square fa-stack-2x"></i>
									<i class="fab fa-github fa-stack-1x"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="row">
							<a href="https://www.patreon.com/memres">
								<span class="fa-stack fa-2x">
									<i class="fas fa-square fa-stack-2x"></i>
									<i class="fab fa-patreon fa-stack-1x"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="row">
							<a href="https://twitter.com/mes">
								<span class="fa-stack fa-2x">
									<i class="fas fa-square fa-stack-2x"></i>
									<i class="fab fa-twitter fa-stack-1x"></i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
<?php if (isset($_SERVER['HTTP_CF_IPCOUNTRY'])) { ?>
		<script>var sc_invisible=1,sc_project=9421647,sc_security="cfd47c32";window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)},ga.l=+new Date,ga("create","UA-8993524-2","auto"),ga("send","pageview"),(adsbygoogle=window.adsbygoogle||[]).push({});</script>
		<script src="https://statcounter.com/counter/counter.js"></script>
		<script src="https://www.google-analytics.com/analytics.js" async></script>
		<script src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" async></script>
<?php } ?>
	</body>
</html>
