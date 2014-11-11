<?php
$file = fopen("C:ejemplo.txt/", "r") or exit("Unable to open file!");
while(!feof($file))
{
echo fgets($file). "<br />";
}
echo 'adssdadasdsadsadsa';
fclose($file);
?>