<?php

$__site = array(
	'title' => 'Testing!'
	);

$ol = $this->toList($__list);
$ol2 = $this->toList($__list2);

$test = $this->flatten($__nest);

$HTML = <<< HTML


<!doctype html>
<html>
<head>
<title>{$__site['title']}</title>
<meta charset='UTF-8'>
<head>

<body>
<h1>$__age</h1>
<h1>$__job</h1>
<p>$__parg</p>

<ul>$ol</ul>
<hr>
<ul>$ol2</ul>
<hr>
<ul>$test</ul>



</body>
</html>

HTML;

return $HTML;