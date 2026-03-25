<?php
$file = fopen("test.txt", 'w') or die("не удалось открыть файл");
$str = "Привет мир!";
fputs($file, $str);

$text = htmlentities(file_get_contents("test.txt"));
echo $text . "<br/>";

fclose ($file);
?>