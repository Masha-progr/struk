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

//function safe_div($num, $div) {
//    if ($div == 0) {
//        throw new DivisionByZeroError("Делить на ноль нельзя!");
//    }
//    return $num / $div;
//}
//try 
//{
//    $result = safe_div(17, 0);
//    echo "$result <br>";
//} 
//catch (DivisionByZeroError $e) 
//{
//    $errMesg = $e->getMessage();
//    echo $errMesg . "<br>";
//    $filOp = fopen("log.txt", "a");
//    fputs($filOp, $errMesg . "<br>");
//    fclose($filOp);
//}

//$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];

//function check_arr($arr, $key) 
//{
//    if (!array_key_exists($key, $arr)) 
//    {
//        throw new Exception("Данный элемент не существует в массиве");
//    }
//    return $arr[$key];
//}
//try 
//{
//    $res = check_arr($countries, 'Germany');
//    echo "Столица Германии: $res <br>";   
//} 
//catch (Exception $e) {
//    echo $e->getMessage() . "<br>";
//    echo "Файл: " . $e->getFile() . "<br>";
//    echo "Строка: " . $e->getLine() . "<br>";
//}

//Часть 2

//echo mktime(10, 25, 0, 3, 15, 2025);

//echo time() - mktime(10, 25, 0, 3, 15, 2025);

//echo date('Y.m.d H:i:s');

//$date = mktime(0, 0, 0, 9, 1, date('Y'));
//echo date('Y.m.d', $date);

//$timestamp = mktime(0, 0, 0, 2, 2, 2000);
//echo date('l', $timestamp);

//$week = [
//    1 => 'понедельник',
//    2 => 'вторник',
//    3 => 'среда',
//    4 => 'четверг',
//    5 => 'пятница',
//    6 => 'суббота',
//    7 => 'воскресенье'
//];

//echo "Сегодня: " . $week[date('N')] . "<br>";

//$dayNumber = date('N', strtotime('2016-06-12'));
//echo "12.06.2016 было: " . $week[$dayNumber] . "<br>";

//$birthdayNumber = date('N', strtotime('2007-11-28'));
//echo date('d.m.Y', strtotime('2007-11-28')) . " была: " . $week[$birthdayNumber];

//<!DOCTYPE html>
//<html lang="ru">
//<head>
//    <meta charset="UTF-8">
//    <title>Сравнение дат</title>
//</head>
//<body>
//<form method="POST">
//    Первая дата (ГГГГ-ММ-ДД): <input type="text" name="date1" required><br><br>
//    Вторая дата (ГГГГ-ММ-ДД): <input type="text" name="date2" required><br><br>
//    <input type="submit" value="Сравнить">
//</form>

//<?php
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    $date1 = $_POST['date1'];
//    $date2 = $_POST['date2'];

//    if (!empty($date1) && !empty($date2)) 
//    {
//        if ($date1 > $date2) {
//            echo "Большая дата: " . $date1;
//        } 
//        elseif ($date1 < $date2) {
//            echo "Большая дата: " . $date2;
//        } 
//        else {
//            echo "Даты равны";
//        }
//    } 
//    else {
//        echo "Введите обе даты!";
//    }
//}
//Закрывающий тег php
//</body>
//</html>

$date = '1983-06-25';
echo date('d-m-Y', strtotime($date));
?>