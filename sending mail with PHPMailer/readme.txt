First of all, goto  https://github.com/PHPMailer/PHPMailer  and download a copy of this (or clone it) in your working directory.

To use gmail's smtp server for sending mails, we need to change acount access for less secure apps.
Login into your google account.
Go to less secure apps settings page - https://www.google.com/settings/security/lesssecureapps
From Access for less secure apps section, select Turn on.

Thats all.
Open the script "send_email.php" using any web server.
(Remember to include PHPMailerAutoload.php file in your script).

Edit the contents of send_email as per your needs.

** For Adding attachments.
$mail->addAttachment('file_path');  			//Replace file_path with path of your attachment

You can also give a name of an attachment.
$mail->addAttachment('file_path', 'new.jpg'); 	