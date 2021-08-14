<p align="center">
<img title="HackIgniter" src="https://img.shields.io/badge/HackIgniter-%20-SCRIPT?colorA=red&colorB=black&colorC=white&style=for-the-badge"></a>
</p>

<p align="center">
<a href="https://github.com/ferhatcil/hackigniter"><img title="hackigniter" src="https://img.shields.io/badge/Tool-HackIgniter-red.svg"></a>
<a href="https://github.com/ferhatcil/hackigniter"><img title="Version" src="https://img.shields.io/badge/Version-v0.0.pilot.4-red.svg?style=flat-square"></a>
</p>

<p align="center">  
<a href="https://github.com/ferhatcil/hackigniter"><img title="hackigniter" width="204" height="240" src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/hackigniter-logo-png-transparent.png"></img></a>
</p>

<p align="center">
<a href="https://github.com/ferhatcil"><img title="Github" src="https://img.shields.io/badge/Ferhat%20%C3%87il-%20-red?style=for-the-badge&logo=github"></a>
<a href="https://www.youtube.com/channel/UCNFlGKonTAN9dfXgg_VrGoA"><img title="YouTube" src="https://img.shields.io/badge/Ferhat%20%C3%87il-%20-red?style=for-the-badge&logo=Youtube"></a>
</p>

<p align="center">
<a href="https://github.com/ferhatcil"><img title="Language" src="https://img.shields.io/badge/Made%20with-PHP(CodeIgniter)-yellowgreen"></a>
<a href="https://github.com/ferhatcil"><img title="Followers" src="https://img.shields.io/github/followers/ferhatcil?color=yellowgreen&style=flat-square"></a>
<a href="https://github.com/ferhatcil"><img title="Stars" src="https://img.shields.io/github/stars/ferhatcil/hackigniter?color=yellowgreen&style=flat-square"></a>
<a href="https://github.com/ferhatcil"><img title="Forks" src="https://img.shields.io/github/forks/ferhatcil/hackigniter?color=yellowgreen&style=flat-square"></a>
<a href="https://github.com/ferhatcil"><img title="Watching" src="https://img.shields.io/github/watchers/ferhatcil/hackigniter?label=Watchers&color=yellowgreen&style=flat-square"></a>
<a href="https://github.com/ferhatcil"><img title="Licence" src="https://img.shields.io/badge/License-MIT-yellowgreen.svg"></a>
</p>

## CodeIgniter Nedir?

CodeIgniter, PHP ile dinamik uygulamalar geliştirmek için geliştirilmiş bir web uygulama iskeletidir. "Geliştiricilerin çok daha hızlı proje geliştirmeleri hedef edilmiştir. En sık ihtiyaç duyacağınız kütüphaneleri kullanarak zaman kazanabilirsiniz." İlk sürüm 28 Şubat 2006 tarihinde yayınlandı. [Vikipedi](https://tr.wikipedia.org/wiki/CodeIgniter)

## HackIgniter'ın kısa özeti

HackIgniter, CodeIgniter kütüphanesi ile kodlanmış ve içerisinde güvenlik açıklıkları barındıran zafiyetli bir web uygulamasıdır. Uygulama üzerinde bulunan zafiyetler, sızma testi sırasında en çok tespit edilen zafiyetlere benzer olacak şekilde hazırlanmıştır. 

## Test edildi

* Windows 10
* Windows Server 2012

## İndir
HackIgniter'ın son sürümünü aşağıdaki komuttan faydalanarak klonlayabilirsiniz.
```
git clone https://github.com/ferhatcil/hackigniter.git
```
veya [zip formatında indirin](https://github.com/ferhatcil/hackigniter/archive/refs/heads/main.zip).

## Kurulum
Lütfen **application/config/database.php.dist** dosyanızın varlığından emin olun. Dosyanızın varlığını doğruladıktan sonra veritabanı kullanıcı adı ve şifrenizi yazmanız ve **application/config/database.php** olarak yeniden adlandırmayı unutmayın. 

Kullanıcı bilgilerinizi **$db['default']** kısmına yazmanız yeterli olacaktır. **$db['exploit']** kısmını lütfen düzenlemeyin.

### Windows ve XAMPP
Eğer hali hazırda web ve veritabanı sunucunuz yoksa. HackIgniter'ı kurup çalıştırabilmeniz için ilk önce XAMPP'i indirip kurmalısınız.

XAMPP bir web sunucusu yazılımıdır. Xampp server ile bilgisayara PHP, MariaDB, Perl ve Apache yanında FileZilla ve MercuryMail gibi sistemler kurularak hazır bir web sunucusu oluşturulabilmektedir. XAMPP serverda phpMyAdmin de kurulu olarak gelmektedir. [Vikipedi](https://tr.wikipedia.org/wiki/XAMPP)

XAMPP şu adresten indirilebilir: 

```
https://www.apachefriends.org/en/xampp.html
```

- [XAMPP'in nasıl kurulduğunu öğrenmek için tıklayınız](https://www.wikihow.com/Install-XAMPP-for-Windows "How to Install XAMPP")

Kısaca; HackIgniter'ın son sürümünü indirin, indirdiginiz dosyaları xampp üzerinden **"C:\xampp\htdocs"**, wamp üzerinden ise **"C:\wamp\www"** dizini içine taşıyın ve ardından kuruluma başlamak için projenizi tarayıcınızda ziyaret edin.

```
http://localhost/<proje-adi>
```

### Veritabanı Kurulumu
Veritabanını kurmak için; **`application/config/database.php`** dosyanıza veritabanı bilgilerinizi girdikten sonra **`http://localhost/<proje-adi>/Setup`** veya **`http://localhost/Setup`** sayfasını ziyaret edin, ardından **"Yükle"** butonuna tıklayın. Bu sayfa, gerekli olan veritabanını ve tablolarını sizin için otamatik bir şekilde oluşturacaktır.

HackIgniter üzerinde oturum açamadığınız durumda */application/config/database.php* dosyasının içerisinde yer alan veritabanı kullanıcı bilgilerinizin doğru olduğundan emin olun.

Değişkenler aşağıdaki şekilde ayarlanmıştır:
```database.php
    $db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => json_decode(file_get_contents(FCPATH . 'db.json'))->name,
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => false,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

### Varsayılan Kullanıcı Bilgileri

- Varsayılan kullanıcı adı ve şifre `admin:susamam`
- Giriş sayfası `http://localhost/<proje-adi>/Login` veya `http://localhost/Login`

## Ekran Görüntüleri
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c1.png"/>
HackIgniter'da oturum açtıktan sonra sizi karşılayacak ana sayfa
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c2.png"/>
Stored tabanlı XSS Zafiyet'in bulunduğu sayfa
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c3.png"/>
Zafiyetleri istismar ettikten sonra elde ettiğiniz bayrakları gönderebileceğiniz "Challange Accepted" sayfası.
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c4.png"/>
HackIgniter uygulamasının veritabanı kurulumunu gerçekleştirmek için kullanacağınız "Setup" sayfası.
</p>

## Version
- Current version is v0.0-pilot.4

## Connect :

<p align="center">
<a href="https://github.com/ferhatcil"><img title="Github" src="https://img.shields.io/badge/Ferhat%20%C3%87il-%20-red?style=for-the-badge&logo=github"></a>
<a href="https://www.youtube.com/channel/UCNFlGKonTAN9dfXgg_VrGoA"><img title="YouTube" src="https://img.shields.io/badge/Ferhat%20%C3%87il-%20-red?style=for-the-badge&logo=Youtube"></a>
<a href="https://www.linkedin.com/in/ferhatcil/"><img title="Linkedin" src="https://img.shields.io/badge/Ferhat%20%C3%87il-%20-red?style=for-the-badge&logo=Linkedin"></a>
<a href="https://packetstormsecurity.com/user/ferhatcil/"><img title="Packet storm" src="https://img.shields.io/badge/Packet%20storm-Ferhat%20%C3%87il-red?style=for-the-badge"></a>
</p>

## MIT License
```
MIT License

Copyright (c) 2021 Ferhat Çil

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
