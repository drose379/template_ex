<?php

require 'viewEngine.php';

$engine = new vEngine("templateEx.php");

$engine->addContent("age","20");
$engine->addContent("job","webdev");
$engine->addContent("parg","This is the first website template I am ever messing with. Its cool!");
echo $engine->view();
