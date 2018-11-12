<?php

$file = simplexml_load_file("config.xml");

foreach ($file as $key => $value) {
	if ($key == "username") 
