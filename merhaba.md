------------------------------------------------------------------    

     _________      .__    _______                &&  [*] Developed By Fatih Yılmaz 
    /   _____/ ____ |  |__ \   _  \ ___  ___      &&  [*] Tool : E-Posta Formu  
    \_____  \_/ ___\|  |  \/  /_\  \\  \/  /      &&  [*] Github : http://github.com/schwarz0x/
    /        \  \___|   Y  \  \_/   \>    <       &&  
   /_______  /\___  >___|  /\_____  /__/\_ \      
           \/     \/     \/       \/      \/       
                                                
------------------------------------------------------------------

❇️ Merhaba✋

❇️ **Proje Özeti**:

* Bu proje, kullanıcıların e-posta yoluyla güvenli bir şekilde iletişim kurmalarını sağlamak amacıyla geliştirilmiştir. Proje, e-posta formlarının siber zorbalık, spam ve kötüye kullanımları engellemek için tasarlanmıştır. Kullanıcıların gönderdiği form verileri yalnızca bir kez işlenir ve zararlı içeriklerden arındırılır. Bu sayede hem kullanıcılar güvenli bir şekilde veri gönderebilir hem de sistem kötüye kullanımdan korunur.

* Proje, **BootstrapMade**'den alınan ücretsiz bir template ile modern bir tasarıma sahip olup, her kullanıcının bilgileri güvenli bir şekilde kaydedilir. Veriler, farklı dosya formatlarında (CSV, HTML, JSON) saklanır. Bu proje, e-posta gönderimini güvenli hale getirirken, aynı zamanda kullanıcı verilerinin izinsiz erişime karşı korunmasına yardımcı olur.

#### **Projenin Amacı:**
* Bu projenin amacı, e-posta formu üzerinden yapılan iletişimin güvenliğini sağlamak ve aynı zamanda siber zorbalıkla mücadele etmektir. Kullanıcı bilgileri yalnızca bir kez form gönderimiyle alınarak, kötüye kullanımı engelleyen sistemler entegre edilmiştir.

#### **Projede Kullanılan Teknolojiler:**
- **PHP**: Form verilerini işlemek, e-posta gönderimini gerçekleştirmek ve dosya saklama işlemleri için kullanılmıştır.
- **JavaScript**: Form gönderiminde butonun devre dışı bırakılması gibi işlevler için kullanılmıştır.
- **HTML/CSS**: Kullanıcı dostu bir form tasarımı sağlanmıştır.
- **Session Yönetimi**: Kullanıcıların formu birden fazla kez göndermelerini engellemek için kullanılmıştır.
- **Veri Depolama**: Veriler CSV, JSON ve HTML formatlarında güvenli bir şekilde saklanmaktadır.
- **IP ve Konum Analizi**: Kullanıcıların IP adresi üzerinden konum bilgileri analiz edilmektedir.

#### **Özellikler:**
1. **Güvenli E-Posta Gönderimi**: Kullanıcıların formu yalnızca bir kez göndermesine izin verilir, tekrar form gönderimi engellenir.
2. **Siber Zorbalık Önleme**: Form verileri kaydedilir ve analiz edilerek siber zorbalık ve kötüye kullanım engellenir.
3. **Veri Depolama**: Form verileri CSV, HTML ve JSON formatlarında güvenli bir şekilde saklanır.
4. **Kullanıcı Bilgilerinin Korunması**: IP adresi, çerezler ve diğer kişisel veriler güvenli bir şekilde işlenir.
5. **IP ve Konum Analizi**: Kullanıcıların IP adresinden coğrafi konum bilgileri alınır ve güvenlik amacıyla saklanır.

#### **Kod Bilgisi ve Geliştirici Notları:**

❗️ **mail_gonder/index.md** kodlarında ise **backup servisi devredışıdır.** Bu kodları kullanarak otomatik veri kaydetme ve kayıt edilen veriler farklı dosya tiplerine göre saklama özelliğini ortadan kaldırmış ve daha da güvenli bir hale getirmiş olursunuz. Benim ekleme sebebim ise bu verileri ilerleyen süreçte bir database'e kayıt etmesini ve bir panelden yönetilip korunacak şekilde çalışmasını istediğim için ve bu projeyi temel alıp belki farklı bir şekilde değerlendirebilecek dostlarım için ekleme gereği duydum.

❗️ **Kişisel Bilgiler** Kişisel bilgilerin korunumuna lütfen dikkat edelim ve üstteki bahsettiğim konuda olduğu gibi backup verilerinin paylaşıma açık olması herkesin erişebileceği anlama gelebilir. Çalınan herhangi bir veride ASLA BİR SORUMLULUK KABUL ETMİYORUM. Çünkü bu basit bir test projesidir ve her sistemde olduğu gibi kullanıcıların dikkat etmesi gerekir. 

#### **Proje Katkı Sağlayanlar & Sağlamak için; :**
Proje, kullanıcılara e-posta yoluyla güvenli iletişim sağlamak amacıyla geliştirilmiştir. Katkı sağlayarak veya geri bildirimde bulunarak projeye dahil olabilirsiniz. Buna ek olarak projemi ticari bir amaçla kullanmak ya da yatırımcı olmak için de aşağıdaki e-posta adresimi kullanabilisiniz. 
||
||==> fatih@siber101.uk 


#### **Kullanıcı İçin Yararlar:**
- Kullanıcılar güvenli bir şekilde iletişim kurabilir.
- Verilerin kötüye kullanımının önüne geçilir.
- Form verileri yalnızca bir kez alınır ve tekrar form gönderimi engellenir.
- Kullanıcı bilgileri güvende tutulur ve veriler uygun formatlarda saklanır.

#### **Kurulum:**
Bu projeyi yerel bilgisayarınızda çalıştırmak için aşağıdaki adımları izleyebilirsiniz:

#### **Git ile Projeyi İndirin**:

    - 🐧 **Linux : Debian**  
        > sudo apt install git  
        > git clone https://github.com/schwarz0x/SecurePosta.git

    - 🐧 **Linux : Ubuntu**  
        > sudo apt update  
        > sudo apt install git  
        > git clone https://github.com/schwarz0x/SecurePosta.git

    - 🍏 **MacOS**  
        > brew install git  
        > git clone https://github.com/schwarz0x/SecurePosta.git

    - 🪟 **Windows**  
         1. [Git'i buradan indirin](https://git-scm.com/download/win)  
         2. Git Bash'i açın ve aşağıdaki komutu yazın:  
         > git clone https://github.com/schwarz0x/SecurePosta.git

    - 🐧 **Linux : Fedora**  
         > sudo dnf install git  
         > git clone https://github.com/schwarz0x/SecurePosta.git

    - 🐧 **Linux : Arch Linux**  
         > sudo pacman -S git  
         > git clone https://github.com/schwarz0x/SecurePosta.git

    - 🖥️ **Windows (WSL - Windows Subsystem for Linux)**  
         > sudo apt update  
         > sudo apt install git  
         > git clone https://github.com/schwarz0x/SecurePosta.git


## Lisans

Bu proje [Apache Lisansı 2.0](http://www.apache.org/licenses/LICENSE-2.0) altında lisanslanmıştır.
