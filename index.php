<?php
$file = fopen("test.txt", 'w') or die("не удалось открыть файл");
$str = "Привет мир!";
fputs($file, $str);
fclose ($file);

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

$file1 = 'folder/world.txt';
$file2 = 'folder/mir.txt';

if (file_exists($file1) && file_exists($file2)) {
    echo "Файлы существуют <br>";
} 
elseif (file_exists($file1)) {
    echo "Существует только файл $file1 <br>";
} 
elseif (file_exists($file2)) {
    echo "Существует только файл $file2 <br>";
} 
else {
    echo "Файлы не существуют <br>";
}

//Часть 2

mkdir("/var/www/struk.ru/test", 0700);

rename("test", "www");

rmdir("www");

$folders = ["styles","images", "docs"];

mkdir("/var/www/struk.ru/test", 0777);

foreach ($folders as $folder) {
    mkdir("test/" . $folder, 0777);
    echo "Создана: test/$folder<br>";
}
?>