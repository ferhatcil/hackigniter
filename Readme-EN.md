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

## Translation
[honestf0x](https://github.com/Fox1337)

## What is the point of CodeIgniter ? 

CodeIgniter is an open-source software rapid development web framework, for use in building dynamic web sites with PHP.[Wikipedia](https://en.wikipedia.org/wiki/CodeIgniter)

## Summery Of HackIgniter

Hack Igniter is web application which is builded with CodeIgniter library and includes web security vulnerabilities.Vulnerabilities in the application, it is prepared to be similar to the most detected vulnerabilities during penetration testing.

## Readme-(N).md
This file is available in multiple languages/Bu dosya birden çok dilde mevcuttur:
- Turkish : [Türkçe](https://github.com/ferhatcil/hackigniter)

If you want to contribute to this project in translation to another language, feel free to send us your translation.

## Tested On

* Windows 10
* Windows Server 2012

## Download
You can reach down below to latest version HackIgniter's:
```
git clone https://github.com/ferhatcil/hackigniter.git
```
or [you can download as a zip file](https://github.com/ferhatcil/hackigniter/archive/refs/heads/main.zip).

## Installation
Please make sure you have *application/config/database.php.dist* file in your computer.After verifying the existence of your file your database username and password in *application/config/database.php* file after check file

It will be enough to write your user information in the $db['default'] section. Please do not edit the $db['exploit'] part.

### Windows and XAMPP
If you do not already have a web and database server, before you can install and run HackIgniter, you must first download and install XAMPP.

[What is XAMPP](https://en.wikipedia.org/wiki/XAMPP)

You can download XAMPP down below:

```
https://www.apachefriends.org/en/xampp.html
```

- [How to install XAMPP for Windows](https://www.wikihow.com/Install-XAMPP-for-Windows "How to Install XAMPP")

To summarize:Download the latest version of HackIgniter, move the downloaded files to "C:\xampp\htdocs" from xampp, to "C:\wamp\www" from WampServer, and then visit your project in your browser to start the installation.

```
http://localhost/<proje-adi>
```

### Database Installation
For the database; After opening your application/config/database.php file in database visit http://localhost/<project-name>/Setup or http://localhost/Setup then click "Install" button. This page will automatically create the ready database and tables for the dimension.

In case you cannot log in to HackIgniter, make sure that your database user information in the /application/config/database.php file is correct.
  
The variables are set as follows:
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

### Default User Information

- Default username and password 'admin:susamam'
- Login Page `http://localhost/<proje-adi>/Login` or `http://localhost/Login`

## Screenshots
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c1.png"/>
HackIgniter's Homepage
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c2.png"/>
Stored XSS vulnerabilities page
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c3.png"/>
The "Challenge Accepted" page where you can submit the flags you get after exploiting the vulnerabilities.
</p>
<p align="center">
<img src="https://raw.githubusercontent.com/ferhatcil/hackigniter/main/images/c4.png"/>
The "Setup" page that you will use to perform the database setup of the HackIgniter application
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
