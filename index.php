<?php
//function safe_fopen($filename, $rights) 
//{
//   $file = fopen($filename, $rights);
//   if ($file === false) 
//   {
//       throw new ErrorException("Файл не удалось открыть");
//   }    
//   return $file;
//}
//try 
//{
//    $file = safe_fopen("nonexistent_file.txt", "r");
//    echo "Файл открыт";
//    fclose($file);
//} 
//catch (ErrorException $e) 
//{
//    echo "Сообщение: " . $e->getMessage() . "<br>";
//    echo "Файл: " . $e->getFile() . "<br>";
//    echo "Строка: " . $e->getLine();
//}
function safe_div($num, $div) {
    if ($div == 0) {
        throw new DivisionByZeroError("Делить на ноль нельзя!");
    }
    return $num / $div;
}

try {
    $result = safe_div(17, 0);
    echo "$result <br>";
} 
catch (DivisionByZeroError $e) {
    $errMesg = $e->getMessage();
    echo $errMesg . "<br>";
    $filOp = fopen("log.txt", "a");
    fputs($filOp, $errMesg . "<br>");
    fclose($filOp);
}
?>