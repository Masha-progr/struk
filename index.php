<?php
$file = fopen("test.txt", 'w') or die("не удалось открыть файл");
$str = "Привет мир!";
fputs($file, $str);

$text = htmlentities(file_get_contents("test.txt"));
echo $text . "<br/>";

rename ("test.txt", "mir.txt") or die ("Ошибка переименования файла");

mkdir("/var/www/struk.ru/folder", 0700);
rename ("mir.txt", "folder/mir.txt") or die ("Ошибка переименования файла");

fclose ($file);
?>