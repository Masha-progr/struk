<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="registr">
        <div>Регистрация</div>
    </div>
    <div class="area">
        <form action="/action.php" method="POST">
            <input name="first_name" type="text" placeholder="Имя" class="r">
            <input name="email" type="email" placeholder="Почта">
            <select name="gender" id="pol">
                <option value="">Пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
            </select>
            <input name="password" type="password" placeholder="Пароль">
            <input name="password_confirm" type="password" placeholder="Повторите пароль">
            <div class="label">
                <input name="terms" type="checkbox" id="sogl">
                <label for="terms">Я принимаю условия о соглашении на обработку персональных данных</label>
            </div>
            <button class="reg" name="btnreg" type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
