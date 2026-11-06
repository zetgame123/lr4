<?php
// Данные для проверки авторизации
$correct_login = 'admin';
$correct_password = '12345';

$login = '';
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($login === $correct_login && $password === $correct_password) {
        $success = true;
    } else {
        $error = 'Неверный логин или пароль.';
    }
}

$title = 'Вход';
include 'header.php';
?>

<h1>Вход</h1>

<?php if ($success): ?>
    <p class="notice success">Авторизация прошла успешно!</p>
<?php elseif ($error !== ''): ?>
    <p class="notice error"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<form action="login.php" method="post">

    <div class="form-row">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($login); ?>" required>
    </div>

    <div class="form-row">
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div class="form-row">
        <label for="remember">Запомнить меня</label>
        <input type="checkbox" id="remember" name="remember" value="yes">
    </div>

    <div class="form-row">
        <span class="label"></span>
        <button type="submit">Войти</button>
    </div>

</form>

<p><a href="index.php">Форма обратной связи</a></p>

</main>
</body>
</html>
