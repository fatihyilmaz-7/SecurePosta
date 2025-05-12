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



<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Güvenli E-Posta Formu 🛡️</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Sitenin ICON Resimleri -->
  <link href="assets/img/siber101.png" rel="icon">
  <link href="assets/img/siber101.png" rel="apple-touch-icon">

  <!-- Kullanılan Yazı Tipleri -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Dosyaları -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Ana CSS Dosyası -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contact</div>
              <img src="assets/img/101_Siyah.svg">
              <p class="lead mb-4">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>info@example.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+1 5589 55488 558</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>A108 Adam Street, New York, NY 535022</span>
                </div>

                <a href="#" class="map-link d-inline-flex align-items-center">
                  Open Map
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

<form id="contactForm" class="php-email-form">
    <fieldset>
        <legend>Contact Form</legend>
        <div>
            <label for="name"></label>
            <input type="text" name="name" class="form-control" placeholder="Adınız" required>
        </div>
        <div>
            <label for="email"></label>
            <input type="email" class="form-control" name="email" placeholder="Email Adresiniz" required>
        </div>
        <div>
            <label for="comments"></label>
            <textarea class="form-control" name="comments" rows="6" placeholder="Mesajınız" required></textarea>
        </div>
        <div>
           <hr>
            <input type="checkbox" id="privacy_policy" onclick="showPrivacyPolicy()">
            <label for="privacy_policy">Bilgilerimin kayıt edilmesini kabul ediyorum</label>
           <hr>
        </div>
        <div class="btn">
            <button type="submit" class="btn btn-submit w-100" id="submit_btn" disabled>Mesajı Gönder</button>
        </div>
    </fieldset>

    <!-- Gizli Alanlar -->
    <input type="hidden" id="user-ip" name="user_ip">
    <input type="hidden" id="user-cookies" name="user_cookies">
    <input type="hidden" id="user-agent" name="user_agent">
</form>

<!-- Sonuç mesajını göstermek için -->
<div id="responseMessage"></div>

<script>
  // Sayfa yüklendiğinde bilgileri al
  window.onload = function() {
    document.getElementById('user-agent').value = navigator.userAgent;
    document.getElementById('user-cookies').value = JSON.stringify(document.cookie);
    getUserIP();
  };

  // IP adresini çek
  function getUserIP() {
    fetch('https://api.ipify.org?format=json')
      .then(response => response.json())
      .then(data => {
        document.getElementById('user-ip').value = data.ip;
      });
  }

  // Gizlilik politikası onayı
  function toggleSubmitButton() {
    document.getElementById('submit_btn').disabled = !document.getElementById('privacy_policy').checked;
  }

  // Form gönderme işlemini AJAX ile yap
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Sayfa yenilenmesini engelle

    var formData = new FormData(this);
// 
//
//   !!! BU KISIMDAKİ "fetch('mail_gonder/' " YERİNDE "mail.php" DOSYASININ KONUMUNU YAZMALISINIZ. 
//   BU KODLARDA "mail_gonder/" şeklinde kullanılması bu isimde bir klasör olduğunu ve içerisinde mail.php dosyasının, index.php ismiyle bulunmasını ifade eder.
//   Yukarıda sözünü ettiğim konuyu anlamanız için simüle etmek için "mail_gonder/" şeklinde örneğini bırakıyorum.
// 
//
fetch('mail_gonder/', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json()) // JSON formatında yanıtı aldığımız kısım
    .then(data => {
      var responseMessage = document.getElementById('responseMessage');
      if (data.status === 'success') {
        responseMessage.innerHTML = "<div class='alert alert-success'>" + data.message + "</div>";
        document.getElementById('contactForm').reset(); // Formu temizle
        document.getElementById('submit_btn').disabled = true; // Butonu tekrar kapat
      } else {
        responseMessage.innerHTML = "<div class='alert alert-danger'>" + data.message + "</div>";
      }
    })
    .catch(error => {
      console.error("Hata:", error);
      document.getElementById('responseMessage').innerHTML = "<div class='alert alert-primary'>Bir hata oluştu, tekrar deneyin.</div>";
    });
  });
  
  // Gizlilik sözleşmenizi bu kısmdan düzenleyebilirsiniz. 
  function showPrivacyPolicy() {
    alert("Gizlilik Sözleşmesi:\nIP adresiniz, oturum çerezleri, konum bilgileriniz, internet sağlayıcınız ve cihaz bilgileriniz güvenlik nedeniyle KAYDEDİLECEK VE BİR SALDIR, ZORBALIK YA DA TEHLİKE UNSURUNDA POLİS BİRİMLERİYLE PAYLAŞILACAKTIR.");
    document.getElementById('submit_btn').disabled = !document.getElementById('privacy_policy').checked;
  }

  function validateForm() {
    if (!document.getElementById('privacy_policy').checked) {
      alert("Göndermeden önce güvenlik sözleşmesini onaylamalısınız.");
      return false;
    }
    return true;
  }  
</script>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->
  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>