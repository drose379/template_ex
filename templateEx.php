<?php
$engine = new Vengine;

$__site = array(
	'title' => 'Testing!'
	);

$HTML = <<< HTML


<!doctype html>
<html>
<head>
<title>{$__site['title']}</title>
<meta charset='UTF-8'>
<head>

<body>
<h1></h1>
</body>
</html>

HTML;

return $HTML;