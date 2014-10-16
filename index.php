<?php

require 'viewEngine.php';

$engine = new vEngine("templateEx.php");

$engine->addContent("age","20");
$engine->addContent("job","webdev");
$engine->addContent("parg","This is the first website template I am ever messing with. Its cool!");

$winnersArray = array (
    'first'  => 'Bob',
    'second' => 'Alice',
    'third'  => 'Charlie',
    'hon'    => 'Billy Jo'
);

$engine->addContent("list", $winnersArray);

$otherArray = array ("Dylan","Jared");

$engine->addContent("list2", $otherArray);

echo $engine->view();
