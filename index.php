<?php
function safe_fopen($filename, $rights) 
{
    $file = fopen($filename, $rights);
    
    if ($file === false) 
    {
        throw new ErrorException("Файл не удалось открыть");
    }
    
    return $file;
}

try 
{
    $file = safe_fopen("nonexistent_file.txt", "r");
    echo "Файл открыт";
    fclose($file);
} 
catch (ErrorException $e) 
{
    echo "Сообщение: " . $e->getMessage() . "<br>";
    echo "Файл: " . $e->getFile() . "<br>";
    echo "Строка: " . $e->getLine();
}
?>