<?PHP
$sender = 'noreply@monkeymommacreations.com';
$recipient = 'monkey_momma08@hotmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>
