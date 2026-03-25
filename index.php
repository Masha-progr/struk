<?php
$file = fopen("test.txt", 'w') or die("не удалось открыть файл");
$str = "Привет мир!";
fputs($file, $str);

$text = htmlentities(file_get_contents("test.txt"));
echo $text . "<br/>";

rename ("test.txt", "mir.txt") or die ("Ошибка переименования файла");

mkdir("/var/www/struk.ru/folder", 0700);
rename ("mir.txt", "folder/mir.txt") or die ("Ошибка переименования файла");

if (copy("/var/www/struk.ru/folder/mir.txt", "/var/www/struk.ru/folder/world.txt"))
    echo "Копия файла создана <br>";
else echo "Ошибка копирования файла";

$file = filesize("folder/world.txt");
echo $file . " байт" . "<br>";
echo $file/1024/1024 . " мегабайт" . "<br>";
echo $file/1024/1024/1024 . " гигабайт" . "<br>";

if (unlink("folder/world.txt"))
    echo "Файл удален <br>";
else echo "Ошибка при удалении файла";


fclose ($file);
?>