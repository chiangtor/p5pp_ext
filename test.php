<?php

$fp_in = file_open("test.txt", "r") or die("Unable to open input file\n");
 
$fp_out = file_open("test.txt.new", "w") or die("Unable to open output file\n");
 
//$a =file_eof($fp_in);
//var_dump($a);

while ( file_eof($fp_in)) {
     $str = file_read($fp_in, 1024);
     print($str);
     file_write($fp_out, $str);
}
 
file_close($fp_in);
file_close($fp_out);

