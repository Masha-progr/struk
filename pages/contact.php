<?php 
include '../includes/header.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data = date('Y-m-d H:i:s') . " | $name | $email | $message\n";
        file_put_contents('../messages.txt', $data, FILE_APPEND | LOCK_EX);
        $success = "Сообщение отправлено!";
        $name = $email = $message = '';
    } else {
        $error = "Заполните все поля корректно!";
    }
}
?>

<main>
    <h1>Контакты</h1>
    
    <?php if (isset($success)) echo "<p style='color:green'>$success</p>"; ?>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    
    <form method="post">
        <input type="text" name="name" placeholder="Имя" value="<?= htmlspecialchars($name ?? '') ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($email ?? '') ?>" required>
        <textarea name="message" placeholder="Сообщение" required><?= htmlspecialchars($message ?? '') ?></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>