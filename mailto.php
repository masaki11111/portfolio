<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>

<body>

<h2>メール送信完了</h2>

<p class="message">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
自動返信メールをお送りしておりますのでご確認ください。<br>
1時間たっても届かない場合はお手数ですがこちらからご連絡ください。
</p>

<?php
$header = null;
$auto_reply_subject = null;
$auto_reply_text = null;
$admin_reply_subject = null;
$admin_reply_text = null;
// 日本時間に変更
date_default_timezone_set('Asia/Tokyo');

// 送信者情報
$header = "MIME-Version: 1.0\n";
$header .= "From: GRAYCODE <noreply@gray-code.com>\n";
$header .= "Reply-To: GRAYCODE <noreply@gray-code.com>\n";
// $headers .= "\r\n";
// htmlメール用
$headers .= "Content-type: text/html; charset=UTF-8";
// 件名を設定
$auto_reply_subject = 'お問い合わせありがとうございます。';

// 本文を設定
$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
下記の内容でお問い合わせを受け付けました。\n\n";
$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
$auto_reply_text .= "氏名：" . $_POST['your_name'] . "\n";
$auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";
$auto_reply_text .= "GRAYCODE 事務局";

// 自動返信メール送信
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);

// 運営側へ送るメールの件名
$admin_reply_subject = "お問い合わせを受け付けました";

// 本文を設定
$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
$admin_reply_text .= "氏名：" . $_POST['your_name'] . "\n";
$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n\n";

// 管理者へメール送信
mb_send_mail( 'webmaster@gray-code.com', $admin_reply_subject, $admin_reply_text, $header);

 ?>

</body>

</html>
