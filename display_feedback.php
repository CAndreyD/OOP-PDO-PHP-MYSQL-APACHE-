<?php


require 'feedback_form.php';

$feedback = new FeedbackForm();
$messages = $feedback->getFeedbackMessages();

if ($messages) {
    foreach ($messages as $message) {
        echo '<div class="message">';
        echo '<p><strong>Name:</strong> ' . $message['fio'] . '</p>';
        echo '<p><strong>Email:</strong> ' . $message['email'] . '</p>';
        echo '<p><strong>Message:</strong> ' . $message['message'] . '</p>';
        echo '</div>';
    }
} else {
    echo 'Сообщений пока нет.';
}
