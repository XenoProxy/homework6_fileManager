<?php

$dir = $_SERVER['DOCUMENT_ROOT'] . '/new_folder';
if (!is_dir($dir)) {
	mkdir($dir, 0777, True);
}