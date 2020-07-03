<?php
	require_once 'get-words.php';
	$url = 'http'.(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']==='on'?'s':'');
	$url .= '://'.$_SERVER['HTTP_HOST'];
?>

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

<div class="alert alert-success alert-sm d-none mr-4" role="alert">
	Link copied to clipboard
</div>

<img src="/share.svg"
	style="transform:scaleX(-1); height:1.8rem; cursor:pointer;"
	data-clipboard-text="<?= "$url/$hash" ?>"
	title="Share"
	alt="Share"
>

<button class="btn btn-sm btn-outline-primary ml-4"
	onclick="jQuery('#shuffled').load('/shuffle.php')"
>
	Refresh
</button>
