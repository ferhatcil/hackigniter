<p align="center">
<img title="HackIgniter" src="https://img.shields.io/badge/HackIgniter-%20-SCRIPT?colorA=red&colorB=black&colorC=white&style=for-the-badge"></a>
</p>

<p align="center">
<a href="https://github.com/ferhatcil/hackigniter"><img title="hackigniter" src="https://img.shields.io/badge/Tool-HackIgniter-red.svg"></a>
<a href="https://github.com/ferhatcil/hackigniter"><img title="Version" src="https://img.shields.io/badge/Version-v0.0.pilot.5-red.svg?style=flat-square"></a>
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

CodeIgniter, PHP ile dinamik uygulamalar geli??tirmek i??in geli??tirilmi?? bir web uygulama iskeletidir. "Geli??tiricilerin ??ok daha h??zl?? proje geli??tirmeleri hedef edilmi??tir. En s??k ihtiya?? duyaca????n??z k??t??phaneleri kullanarak zaman kazanabilirsiniz." ??lk s??r??m 28 ??ubat 2006 tarihinde yay??nland??. [Vikipedi](https://tr.wikipedia.org/wiki/CodeIgniter)

## HackIgniter'??n k??sa ??zeti

HackIgniter, CodeIgniter Framework'?? ile kodlanm???? ve i??erisinde g??venlik a????kl??klar?? bar??nd??ran zafiyetli bir web uygulamas??d??r. Uygulama ??zerinde bulunan zafiyetler, s??zma testi s??ras??nda en ??ok tespit edilen zafiyetlere benzer olacak ??ekilde haz??rlanm????t??r. 

## Readme-(N).md
Bu dosya birden ??ok dilde mevcuttur:
- ??ngilizce : [English](https://github.com/ferhatcil/hackigniter/blob/main/Readme-EN.md)

E??er ??eviriye katk??da bulunmak istiyorsan??z istek g??ndermekten korkmay??n. 

## Test edildi

* Windows 10
* Windows Server 2012

## ??ndir
HackIgniter'??n son s??r??m??n?? a??a????daki komuttan faydalanarak klonlayabilirsiniz.
```
git clone https://github.com/ferhatcil/hackigniter.git
```
veya [zip format??nda indirin](https://github.com/ferhatcil/hackigniter/archive/refs/heads/main.zip).

## Kurulum
L??tfen **application/config/database.php.dist** dosyan??z??n varl??????ndan emin olun. Dosyan??z??n varl??????n?? do??rulad??ktan sonra veritaban?? kullan??c?? ad?? ve ??ifrenizi yazman??z ve **application/config/database.php** olarak yeniden adland??rmay?? unutmay??n. 

Kullan??c?? bilgilerinizi **$db['default']** k??sm??na yazman??z yeterli olacakt??r. **$db['exploit']** k??sm??n?? l??tfen d??zenlemeyin.

### Windows ve XAMPP
E??er hali haz??rda web ve veritaban?? sunucunuz yoksa. HackIgniter'?? kurup ??al????t??rabilmeniz i??in ilk ??nce XAMPP'i indirip kurmal??s??n??z.

XAMPP bir web sunucusu yaz??l??m??d??r. Xampp server ile bilgisayara PHP, MariaDB, Perl ve Apache yan??nda FileZilla ve MercuryMail gibi sistemler kurularak haz??r bir web sunucusu olu??turulabilmektedir. XAMPP serverda phpMyAdmin de kurulu olarak gelmektedir. [Vikipedi](https://tr.wikipedia.org/wiki/XAMPP)

XAMPP ??u adresten indirilebilir: 

```
https://www.apachefriends.org/en/xampp.html
```

- [XAMPP'in nas??l kuruldu??unu ????renmek i??in t??klay??n??z](https://www.wikihow.com/Install-XAMPP-for-Windows "How to Install XAMPP")

K??saca; HackIgniter'??n son s??r??m??n?? indirin, indirdiginiz dosyalar?? xampp ??zerinden **"C:\xampp\htdocs"**, wamp ??zerinden ise **"C:\wamp\www"** dizini i??ine ta????y??n ve ard??ndan kuruluma ba??lamak i??in projenizi taray??c??n??zda ziyaret edin.

```
http://localhost/<proje-adi>
```

### Veritaban?? Kurulumu
Veritaban??n?? kurmak i??in; **`application/config/database.php`** dosyan??za veritaban?? bilgilerinizi girdikten sonra **`http://localhost/<proje-adi>/Setup`** veya **`http://localhost/Setup`** sayfas??n?? ziyaret edin, ard??ndan **"Y??kle"** butonuna t??klay??n. Bu sayfa, gerekli olan veritaban??n?? ve tablolar??n?? sizin i??in otamatik bir ??ekilde olu??turacakt??r.

HackIgniter ??zerinde oturum a??amad??????n??z durumda */application/config/database.php* dosyas??n??n i??erisinde yer alan veritaban?? kullan??c?? bilgilerinizin do??ru oldu??undan emin olun.

De??i??kenler a??a????daki ??ekilde ayarlanm????t??r:
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

### Varsay??lan Kullan??c?? Bilgileri

- Varsay??lan kullan??c?? ad?? ve ??ifre `admin:susamam`
- Giri?? sayfas?? `http://localhost/<proje-adi>/Login` veya `http://localhost/Login`

## Ekran G??r??nt??leri
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c1.png"/>
HackIgniter'da oturum a??t??ktan sonra sizi kar????layacak ana sayfa
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c2.png"/>
Stored tabanl?? XSS Zafiyet'in bulundu??u sayfa
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c3.png"/>
Zafiyetleri istismar ettikten sonra elde etti??iniz bayraklar?? g??nderebilece??iniz "Challange Accepted" sayfas??.
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c4.png"/>
HackIgniter uygulamas??n??n veritaban?? kurulumunu ger??ekle??tirmek i??in kullanaca????n??z "Setup" sayfas??.
</p>

## Version
- Current version is v0.0-pilot.5

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

Copyright (c) 2021 Ferhat ??il

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
