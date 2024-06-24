<?php
require 'feedback_form.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $feedback = new FeedbackForm();
    if ($feedback->saveFeedback($name, $email, $message)) {
        header('Location: /');
        exit();
    } else {
        echo 'Ошибка сохранения сообщения';
    }
} else {
    header('Location: feedback_form.php');
    exit();
}

