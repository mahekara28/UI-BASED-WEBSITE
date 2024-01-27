<?php

ectract($_REQUEST);
$file=fopen("com.txt","a");

fwrite($file,"name:");
fwrite($file,$name."\n");
fwrite($file,"message:");
fwrite($file,$text."\n");
fclose($file);
?>