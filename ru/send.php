<?php 
$name = @ trim ($_POST['message-subject']);
$name = @ trim ($_POST['name']);
$contact = @ trim ($_POST['contact']);
$message = @ trim ($_POST['message']);

if (! $name or ! $contact or ! $message) exit (header("Location: /ru/contacts/senderror.html"));

mail("contact@sanmoregames.com",
"Тема сообщения: $message-subject",
"Отправитель: $name)",
"$message \n\n Обратная связь: \n $contact");
header("Location: /ru/contacts/senddone.html");
?>