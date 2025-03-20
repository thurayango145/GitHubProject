<?php
// This PHP script is designed to demonstrate basic file handling and variable initialization.
// It opens a file named "example.txt" in read mode and then reads its contents into the $data variable.
$data = file("example.txt", FILE_IGNORE_NEW_LINES);
