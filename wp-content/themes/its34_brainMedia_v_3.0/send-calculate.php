<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors', 1);
error_reporting(E_ALL);
function mime_header_encode($str, $data_charset, $send_charset)
{
    if ($data_charset != $send_charset) {
        $str = iconv($data_charset, $send_charset, $str);
    }
    return '=?' . $send_charset . '?B?' . base64_encode($str) . '?=';
}

function send_mime_mail_a($name_from, // имя отправителя
                          $email_from, // email отправителя
                          $name_to, // массив имен получателя
                          $email_to, // массив email-адресов получателя
                          $data_charset, // кодировка переданных данных
                          $send_charset, // кодировка письма
                          $subject, // тема письма
                          $body, // текст письма
                          $html = FALSE, // письмо в виде html или обычного текста
                          $reply_to = FALSE
)
{
    $to = '';
    for ($i = 0; $i < count($name_to); $i++) {
        $to .= mime_header_encode($name_to[$i], $data_charset, $send_charset) . ' <' . $email_to[$i] . '>' . (($i < count($name_to) - 1) ? ', ' : '');
    }
    $subject = mime_header_encode($subject, $data_charset, $send_charset);
    $from = mime_header_encode($name_from, $data_charset, $send_charset)
        . ' <' . $email_from . '>';
    if ($data_charset != $send_charset) {
        $body = iconv($data_charset, $send_charset, $body);
    }
    $headers = "From: $from\r\n";
    $type = ($html) ? 'html' : 'plain';
    $headers .= "Content-type: text/$type; charset=$send_charset\r\n";
    $headers .= "Mime-Version: 1.0\r\n";
    if ($reply_to) {
        $headers .= "Reply-To: $reply_to";
    }
    return mail($to, $subject, $body, $headers);
}

$body = 'Сообщение от ' . $_POST['fio'] .
    PHP_EOL .
    'Телефон: ' . $_POST['tel'] .
    PHP_EOL .
    'EMail: ' . $_POST['email'] .
    PHP_EOL . PHP_EOL .
    'Детали: ' . PHP_EOL . PHP_EOL;

foreach ($_POST['services'] as $service) {
    $body .= $service['name'] . ': ' . $service['price'] . PHP_EOL;
}

$action = send_mime_mail_a('mandarin1c',// Имя отправителя
    'no-reply@mandarin1c.ru', // e-mail отправителя
    ['Admin mandarin1c', 'Admin mandarin1c'], // Имя получателя
    ['office_its@itservis1c.ru', 'notify@brainor.ru'],// e-mail получателя
    'utf-8',  // кодировка, в которой находятся передаваемые строки
    'KOI8-R', // кодировка, в которой будет отправлено письмо
    'Предзаказ',// тема письма
    $body);// тело письма

header('Content-type: application/json');
echo json_encode('Заявка принята. В ближайшее время с Вами свяжется менеджер.');
?>