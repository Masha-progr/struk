<?php
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$password_confirm = isset($_POST['password_confirm']) ? $_POST['password_confirm'] : '';
$terms = isset($_POST['terms']) ? 'Принято' : 'Не принято';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат регистрации</title>
</head>
<body>
    <div class="area">
         <h2>Здравствуйте, <?php echo $first_name; ?>!</h2>
	 <p>Email: <?php echo $email; ?></p>
         <p>Пол: <?php echo $gender; ?></p>
         <p>Согласие: <?php echo $terms; ?></p>
    </div>
</body>
</html>