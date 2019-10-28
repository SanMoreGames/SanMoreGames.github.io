<?php 
$name = @ trim ($_POST['name']);
$contact = @ trim ($_POST['contact']);
$message = @ trim ($_POST['message']);

if (! $name or ! $contact or ! $message) exit (header("Location: /ua/contacts/senderror.html"));

mail("contact@sanmoregames.com", 
"Відправник: $name)",
"$message \n\n Зворотній зв'язок: \n $contact");
header("Location: /ua/contacts/senddone.html");
?>