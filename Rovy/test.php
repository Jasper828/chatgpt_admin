<?php

// 引入PHPMailer库
require_once 'path/to/PHPMailerAutoload.php';

// 创建一个PHPMailer对象
$mail = new PHPMailer();

// 设置SMTP服务器地址和端口号
$mail->isSMTP();
$mail->Host = 'smtp.qq.com';
$mail->Port = 465; // 或者587

// 设置SMTP服务器的用户名和密码
$mail->SMTPAuth = true;
$mail->Username = '2646222597@qq.com';
$mail->Password = '你的邮箱密码';

// 设置发件人和收件人
$mail->setFrom('2646222597@qq.com', '发件人姓名');
$mail->addAddress('收件人邮箱', '收件人姓名');

// 设置邮件主题和内容
$mail->Subject = '邮件主题';
$mail->Body    = '邮件内容';

// 发送邮件
if(!$mail->send()) {
    echo '邮件发送失败：' . $mail->ErrorInfo;
} else {
    echo '邮件发送成功！';
}
