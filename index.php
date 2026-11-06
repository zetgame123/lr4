<?php
$name = isset($_GET['N']) ? $_GET['N'] : '';
$email = isset($_GET['E']) ? $_GET['E'] : '';
$source = isset($_GET['S']) ? $_GET['S'] : 'internet';

$title = 'Форма обратной связи';
include 'header.php';
?>

<h1>Форма обратной связи</h1>

<form action="home.php" method="post" enctype="multipart/form-data">

    <div class="form-row">
        <label for="name">ФИО:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
    </div>

    <div class="form-row">
        <label for="email">Ваш e-mail:</label>
        <input type="email" id="email" name="email" placeholder="example@mail.ru" value="<?php echo htmlspecialchars($email); ?>" required>
    </div>

    <div class="form-row">
        <label for="category">Тема обращения:</label>
        <select id="category" name="category">
            <option value="propose">Предложение</option>
            <option value="complaint">Жалоба</option>
        </select>
    </div>

    <div class="form-row">
        <span class="label">Откуда вы узнали о нас?</span>
        <div class="radio-group">
            <label><input type="radio" name="source" value="internet" <?php if ($source !== 'friends') echo 'checked'; ?>> Реклама из интернета</label>
            <label><input type="radio" name="source" value="friends" <?php if ($source === 'friends') echo 'checked'; ?>> Рассказали друзья</label>
        </div>
    </div>

    <div class="form-row">
        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" rows="6" required></textarea>
    </div>

    <div class="form-row">
        <label for="attachment">Выбор файла:</label>
        <input type="file" id="attachment" name="attachment">
    </div>

    <div class="form-row">
        <label for="agree">Даю согласие на обработку данных</label>
        <input type="checkbox" id="agree" name="agree" value="yes" required>
    </div>

    <div class="form-row">
        <span class="label"></span>
        <button type="submit">Отправить</button>
    </div>

</form>

<p><a href="login.php">Форма входа</a></p>

</main>
</body>
</html>
