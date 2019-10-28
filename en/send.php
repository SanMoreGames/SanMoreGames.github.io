<?php 
$name = @ trim ($_POST['name']);
$contact = @ trim ($_POST['contact']);
$message = @ trim ($_POST['message']);

if (! $name or ! $contact or ! $message) exit (header("Location: /en/contacts/senderror.html"));

mail("contact@sanmoregames.com", 
"Sender: $name)",
"$message \n\n Feedback: \n $contact");
header("Location: /en/contacts/senddone.html");
?>