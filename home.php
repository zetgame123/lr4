<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['name'])) {
    header('Location: index.php');
    exit;
}

$name = $_POST['name'];
$email = isset($_POST['email']) ? $_POST['email'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';
$source = isset($_POST['source']) ? $_POST['source'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$attachment = '';
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
    $attachment = $_FILES['attachment']['name'];
}

$title = 'Ответ на обращение';
include 'header.php';
?>

<h1>Ответ на обращение</h1>

<p>Здравствуйте, <?php echo htmlspecialchars($name); ?>!</p>

<?php if ($category === 'propose'): ?>
    <p>Спасибо за ваше предложение:</p>
<?php else: ?>
    <p>Мы рассмотрим вашу жалобу:</p>
<?php endif; ?>

<div class="message"><?php echo nl2br(htmlspecialchars($message)); ?></div>

<?php if ($attachment !== ''): ?>
    <p>Вы приложили следующий файл: <?php echo htmlspecialchars($attachment); ?></p>
<?php endif; ?>

<p>
    <a class="btn" href="index.php?N=<?php echo urlencode($name); ?>&E=<?php echo urlencode($email); ?>&S=<?php echo urlencode($source); ?>">Заполнить снова</a>
</p>

</main>
</body>
</html>
