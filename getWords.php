<?php

$s = empty($_GET['s']) ? ucwords(shell_exec('shuf -n1 s.txt')) : $_GET['s'];
$c = empty($_GET['c']) ? ucwords(shell_exec('shuf -n1 c.txt')) : $_GET['c'];
