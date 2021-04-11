
<meta http-equiv="refresh" content="2;URL= iletisim-formu.html">

<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                   // send via SMTP
$mail->Host     = "mail.digital-mann.de"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "admin@digital-mann.de";  // SMTP username
$mail->Password = "M.k12121988"; // SMTP password
$mail->CharSet = 'UTF-8';
$mail->Port = 587;
$mail->From     = "admin@digital-mann.de"; // smtp kullanycy adynyz ile ayny olmaly
$mail->Fromname = "giden ismi";
$mail->AddAddress("admin@digital-mann.de","Websitenizden gelen Sipariþiniz.");
$mail->Subject  =  $_POST['ad'];
$mail->Body     =  implode("  ",$_POST);
if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo '<script type="text/javascript">alert("E Postanız  Başarı ile  Gönderilmiştir.");</script>';

?>
