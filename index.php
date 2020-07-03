<?php require_once 'get-words.php' ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<title><?= $s ?> Elon's <?= $c ?></title>

		<!-- Search Engine -->
		<meta name="description" content="Elon Musk's three letter acronym random phrase generator">
		<meta name="image" content="https://elonsec.club/elon-musk.jpg">
		<!-- Schema.org for Google -->
		<meta itemprop="name" content="<?= $s ?> Elon's <?= $c ?>">
		<meta itemprop="description" content="Elon Musk's three letter acronym random phrase generator">
		<meta itemprop="image" content="https://elonsec.club/elon-musk.jpg">
		<!-- Twitter Card -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?= $s ?> Elon's <?= $c ?>">
		<meta name="twitter:description" content="Elon Musk's three letter acronym random phrase generator">
		<meta name="twitter:image:src" content="<?= $url ?>/elon-musk.jpg">
		<!-- Open Graph -->
		<meta name="og:title" content="<?= $s ?> Elon's <?= $c ?>">
		<meta name="og:type" content="website">
		<meta name="og:url" content="<?= "$url/$hash" ?>">
		<meta name="og:image" content="https://elonsec.club/elon-musk.jpg">
		<meta name="og:description" content="Elon Musk's three letter acronym random phrase generator">
		<meta name="og:site_name" content="Elon's Three Letter Acronym">

		<style>
			html, body, .container, .row {
				height: 100%;
			}
		</style>
	</head>
	<body class="text-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<blockquote class="twitter-tweet tw-align-center">
						<p lang="en" dir="ltr">
							SEC, three letter acronym, middle word is Elon’s
						</p>
						&mdash; Elon Musk (@elonmusk)
						<a href="https://twitter.com/elonmusk/status/1278764736876773383">
							July 2, 2020
						</a>
					</blockquote>
					<br>
				</div>
				<div class="col-12" id="shuffled">
					<? include 'shuffle.php' ?>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="/clipboard.min.js"></script>
		<script>
			var clipboard = new ClipboardJS('[data-clipboard-text]');
			clipboard.on('success', function(e) {
				jQuery('.alert').removeClass('d-none').addClass('d-inline');
			});
			clipboard.on('error', function(e) {
				jQuery('#direct-link').attr('type', 'text');
			});
		</script>
<?/*
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
*/?>
		<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	</body>
</html>
