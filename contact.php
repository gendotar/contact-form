<!DOCTYPE html>
<html>
<head>
  <title>Форма обратной связи</title>
</head>
<body>
  <h2>Обратная связь</h2>
  <form action="process_feedback.php" method="POST">
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="message">Сообщение:</label><br>
    <textarea id="message" name="message" required></textarea><br>

    <input type="submit" value="Отправить">
  </form>
</body>
</html>
