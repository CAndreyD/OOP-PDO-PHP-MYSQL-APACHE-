<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Form</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Feedback Form</h2>
    <form action="submit_feedback.php" method="post">
        <label for="fio">Полное имя</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Отправить</button>
    </form>
    
    <h3>Сообщения:</h3>
    <div class="messages">
        <?php include 'display_feedback.php'; ?>
    </div>
</div>

</body>
</html>
