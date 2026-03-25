<?php
$file = fopen("test.txt", 'w') or die("не удалось открыть файл");
$str = "Привет мир!";
fputs($file, $str);
fclose ($file);
?>