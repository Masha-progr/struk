<?php
if (isset($_POST['operation'])) {
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $operation = $_POST['operation'];
    
    $result = '';
    $error = '';
    
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $error = "Делить на ноль нельзя!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
        }
    } else {
        $error = "Введите корректные числовые значения";
    }
} else {
    $num1 = '';
    $num2 = '';
    $result = '';
    $error = '';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <style>
        body {
            background: linear-gradient(135deg, #aae1da, #ea81e5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input:focus {
            border-color: #ea81e5;
            outline: none;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin: 20px 0;
        }
        button {
            padding: 15px;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: #f0f0f0;
            transition: all 0.3s;
        }
        button:hover {
            background: #c93dc2;
            color: white;
        }
        .result {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
        .error {
            background: #ffebee;
            color: #c62828;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Калькулятор</h2>
        <form method="POST" action="mycalculator.php">
            <input type="number" name="num1" placeholder="Первое число" step="any" required value="<?php echo $num1; ?>">
            <input type="number" name="num2" placeholder="Второе число" step="any" required value="<?php echo $num2; ?>">
            
            <div class="buttons">
                <button type="submit" name="operation" value="add">+</button>
                <button type="submit" name="operation" value="subtract">-</button>
                <button type="submit" name="operation" value="multiply">×</button>
                <button type="submit" name="operation" value="divide">÷</button>
            </div>
        </form>
        
        <?php if (!empty($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php elseif ($result !== ''): ?>
            <div class="result">Результат: <?php echo $result; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>