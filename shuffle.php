<?php require_once 'get-words.php' ?>

<h2>
	<?= $s ?> Elon's <?= $c ?>
</h2>

<br>

<input type="hidden"
	value="<?= "$url/$hash" ?>"
	class="form-control d-inline"
	id="direct-link"
	style="width:auto;"
>

<div class="alert alert-success alert-sm d-none mr-2" role="alert">
	Copied to clipboard
</div>

<img src="/share.svg"
	style="transform:scaleX(-1); height:1.8rem; cursor:pointer;"
	data-clipboard-text="<?= "$url/$hash" ?>"
	title="Share"
	alt="Share"
	class="mr-4"
>

<button class="btn btn-sm btn-outline-primary ml-4"
	onclick="jQuery('#shuffled').load('/shuffle.php', function() {
		document.title = jQuery(this).find('h2').text();
	})"
>
	Refresh
</button>
