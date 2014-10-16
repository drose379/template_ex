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

$aboutPeople = array(
    'Alice'   => array(
        'gender' => 'female',
        'age'    => 29,
        'job'    => 'sysadmin'
    ),
    'Bob'     => array(
        'gender' => 'male',
        'age'    => 34,
        'job'    => 'data analyst'
    ),
    'Mallory' => array(
        'gender' => 'female',
        'age'    => null,
        'job'    => null
    )
);



echo $engine->view();
