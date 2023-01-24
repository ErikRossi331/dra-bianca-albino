<?php

use Illuminate\Support\Facades\Redirect;

$name = $_POST['contact-name'];
$tel = $_POST['contact-phone'];
$email = $_POST['contact-email'];
$mailcontent = $_POST['textarea-message'];

$mailsend =  "gabrielcanali@agenciaevidence.com.br";
$maildestiny = $mailsend;
$subject = "Wesley Lutero | Contato através do site";
$mailcontent = "
<b>Nome:</b> {$name}<br>
<b>Telefone:</b> {$tel}<br>
<b>Email:</b> {$email}<br><br>
Assunto:<br>
{$mailcontent}
";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: <{$mailsend}>";
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($maildestiny, $subject, $mailcontent, $headers);
if($enviaremail){ 
    Redirect::route('mail.contato');
};

?>