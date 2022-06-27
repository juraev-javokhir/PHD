<? php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'shukurovaphd.uz';

$email_subject = 'Ariza (shukurovaphd.uz)';

$email_body = "Foydalanuchi Ismi: $name.\n".
              "Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "Shikoyat Xati: $message.\n";

$to = "shukurova_1981@list.ru"; 

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n"

mail($to, $email_subject, $email_body, $headers );

header("Manba: contact.html");

?>