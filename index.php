<?php

require 'viewEngine.php';

$engine = new vEngine("templateEx.php");

$engine->addContent("age","20");
$engine->addContent("job","webdev");
echo $engine->view();
