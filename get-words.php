<?php

if (!empty($_SERVER['PATH_INFO'])) {
	$hash = preg_replace('/\W/', '', $_SERVER['PATH_INFO']);
	if ($hash && file_exists("hashes/$hash")) {
		$words = explode("\n", file_get_contents("hashes/$hash"));
		if (!empty($words[0]) && !empty($words[1])) {
			$s = $words[0];
			$c = $words[1];
		}
		unset($words);
	}
}

if (empty($s) || empty($c)) {
	$s = ucwords(trim(shell_exec("shuf -n1 s.txt")));
	$c = ucwords(trim(shell_exec("shuf -n1 c.txt")));
}

$hash = dechex(crc32("$s:$c"));

if (!file_exists("hashes/$hash")) {
	file_put_contents("hashes/$hash", "$s\n$c");
}
