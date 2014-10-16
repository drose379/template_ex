<?php

require 'viewEngine.php';

$engine = new vEngine("templateEx.php");

$engine->addContent("age","20");
$engine->addContent("job","webdev");
$engine->addContent("parg","This is the first website template I am ever messing with. Its cool!");
$engine->toList( array (
	'first'  => 'Bob',
    'second' => 'Alice',
    'third'  => 'Charlie',
    'hon'    => 'Billy Jo'
));

$engine->addContent("list", $bunch);

echo $engine->view();
