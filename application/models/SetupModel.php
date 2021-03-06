<?php

class SetupModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
        $this->loadDB = $this->load->database('exploit', TRUE);
    }

    public function HackIgniter()
    {
        $createDatabase = $this->dbforge->create_database("hackigniter");
        if ($createDatabase) {
            $this->db->close();
            return 1;
        }
    }

    public function hi_0()
    {
        $createTable = "CREATE TABLE `hi_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";

        $insertData = "INSERT INTO `hi_0` (`id`, `username`, `password`, `loginStatus`) VALUES (1, 'susamam3513', 'o2cnd3q50psp', '0')";

        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_1()
    {
        $createTable = "CREATE TABLE `hi_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_1` (`id`, `username`, `password`, `loginStatus`) VALUES (1, 'susamam5241', 'kkmlwu15ub7p', '0'), (2, 'flag', '8740e334-01c0-4db9-b63b-19399b061c1f', '0');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_csrf_0()
    {
        $createTable = "CREATE TABLE `hi_csrf_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL, `surname` varchar(250) NOT NULL, `identityNumber` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `ibanNumber` varchar(250) NOT NULL, `totalAmount` float NOT NULL, PRIMARY KEY (`id`), UNIQUE KEY `ibanNumber` (`ibanNumber`), UNIQUE KEY `identityNumber` (`identityNumber`) ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_csrf_0` (`id`, `name`, `surname`, `identityNumber`, `password`, `ibanNumber`, `totalAmount`) VALUES (5, 'Ferhat', '??il', '18362964212', '1881', '0001', 1), (6, 'Richie', 'Rich', '56044987104', '1234', '0002', 9999)";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_csrf_1()
    {
        $createTable = "CREATE TABLE `hi_csrf_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `id1` varchar(250) NOT NULL, `id2` varchar(250) NOT NULL, `amount` int(11) NOT NULL, `date` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4";
        if ($this->loadDB->query($createTable)) {
            return 1;
        }
    }

    public function hi_flags()
    {
        $createTable = "CREATE TABLE `hi_flags` ( `id` int(11) NOT NULL AUTO_INCREMENT, `vulnerabilityCode` varchar(250) NOT NULL, `name` varchar(250) NOT NULL, `status` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_flags` (`id`, `vulnerabilityCode`, `name`, `status`) VALUES (1, 'errorBasedSqlInjection', '39d3ffa1-45a0-4c61-981b-348fe3cbd259', '0'), (2, 'timeBasedSqlInjection', '8740e334-01c0-4db9-b63b-19399b061c1f', '0'), (3, 'idor', 'null', '0'), (4, 'csrf', 'null', '0'), (5, 'xssToRce', '8dd5e8d3-ea7d-4199-b895-4690415bfec0', '0'), (6, 'osCommand', '44211f5c-3863-4348-a8bf-896fccd010f8', '0'), (7, 'missingFunction', 'null', '0');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_idor_0()
    {
        $createTable = "CREATE TABLE `hi_idor_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(250) NOT NULL, `surname` varchar(250) NOT NULL, `identityNumber` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `ibanNumber` varchar(250) NOT NULL, `totalAmount` float NOT NULL, PRIMARY KEY (`id`), UNIQUE KEY `ibanNumber` (`ibanNumber`), UNIQUE KEY `identityNumber` (`identityNumber`) ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_idor_0` (`id`, `name`, `surname`, `identityNumber`, `password`, `ibanNumber`, `totalAmount`) VALUES (1, 'Ferhat', 'Cil', '32992363894', 'pass', '0001', 1), (2, 'Mustafa', 'D??kel', '10514736838', 'rV4hBbbj7YJQZV8Y', '0002', 60), (3, 'Murat', 'Sahin', '91864751450', 'Eu4S6EGdKC5D29Cf', '0003', 100), (4, 'Nurcan', '??lhan', '57946915882', 'BSf8vAC3yrsmsmYc', '0004', 1000);";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_idor_1()
    {
        $createTable = "CREATE TABLE `hi_idor_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `id1` varchar(250) NOT NULL, `id2` varchar(250) NOT NULL, `amount` int(11) NOT NULL, `date` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_idor_1` (`id`, `id1`, `id2`, `amount`, `date`) VALUES (26, '0001', '0002', 10, '2021-07-12 14:10:04');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_missingfunction_0()
    {
        $createTable = "CREATE TABLE `hi_missingfunction_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_missingfunction_0` (`id`, `username`, `password`) VALUES (1, 'cyberdetails', '12345'), (4, 'nazimhikmet', 'piraye')";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_users()
    {
        $createTable = "CREATE TABLE `hi_users` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(500) NOT NULL, `status` enum('0','1') NOT NULL DEFAULT '1', `createdAt` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_users` (`id`, `username`, `password`, `status`, `createdAt`) VALUES (1, 'admin', 'susamam', '1', '2021-05-16 01:46:58');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_xss_0()
    {
        $createTable = "CREATE TABLE `hi_xss_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `role` enum('0','1') NOT NULL DEFAULT '0', `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_xss_0` (`id`, `username`, `password`, `role`, `loginStatus`) VALUES (2, 'burakbozaci', '1234', '0', '0'), (4, 'ferhatcil', '1234', '1', '0');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_xss_1()
    {
        $createTable = "CREATE TABLE `hi_xss_1` ( `id` int(11) NOT NULL AUTO_INCREMENT, `userID` int(11) NOT NULL, `title` varchar(250) NOT NULL, `content` varchar(500) NOT NULL, `createdDate` datetime NOT NULL DEFAULT current_timestamp(), PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_xss_1` (`id`, `userID`, `title`, `content`, `createdDate`) VALUES (5, 2, 'Klavyeme ??okomel bula??t??.', 'Yine ayn?? ??ey oldu klavyeye kahveyi d??kd??m bir ka?? dakika ??nce. ??imdilik ??al??????yor bakal??m ne olacak. ??nsanl??k bu klavye kahve sorunsal??na nas??l ??are bulacak her??ey mars a gitmek de??ilki . Birazdan i??erdeki s??v?? buharla??acak yap????kan ??eker kahve ??okomel kar??????m?? tu??lar?? tutukluk yap??p kitleyecek biliyorum. Bir s??re yazmazsam endi??eye kap??lmay??n l??tfen. ', '2021-05-22 19:51:43');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_xss_2()
    {
        $createTable = "CREATE TABLE `hi_xss_2` ( `id` int(11) NOT NULL AUTO_INCREMENT, `ticketId` int(11) NOT NULL, `userID` int(11) NOT NULL, `comment` varchar(250) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_xss_2` (`id`, `ticketId`, `userID`, `comment`) VALUES (23, 5, 4, 'Islak mendille silmeyi dene.'), (33, 5, 2, '??ok ak??ll??s??n ya.');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

    public function hi_sqli_0()
    {
        $createTable = "CREATE TABLE `hi_0` ( `id` int(11) NOT NULL AUTO_INCREMENT, `username` varchar(250) NOT NULL, `password` varchar(250) NOT NULL, `loginStatus` enum('0','1') NOT NULL DEFAULT '0', PRIMARY KEY (`id`), UNIQUE KEY `username` (`username`) ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4";
        $insertData = "INSERT INTO `hi_sqli_0` (`id`, `text`, `author`) VALUES (1, 'Sa???? solu belli olmayan Mangala gitti maganda! Orman yanar Tabiat??n g??zleri kan a??lar', 'Fuat'), (2, 'Abi yapma! Atma ??u izmaritini denize Geri alamazs??n G??n gelir o pisli??ini att??????n denize hasret kal??rs??n, bakamazs??n!', 'Ados'), (3, 'Fakirin vergisiyle yat??na, kat??na katana salak Ha??ere geri yolsuz vekil seni, senin eserin! ??imdi kap??n?? kollamas?? gereken adalet gelir ac??maz\r\n\r\nVurur k??rar kap??n??\r\n\r\n????nk?? ??ocuk ??ld?? vuran memurdu diye \"Hakl??d??r\" dedin\r\n\r\nSesini ????karmad??n, yani su??lusun!', '??an????er'), (4, 'Medya, bas??n, hukuk, asker hepsi sizin i??in ??al??????rken Aslen g??ne?? bile ??zerine do??uyo bu ??ocuklar??n ????e gidip geliyolar canlar??na kasten Silah??n??z?? kin! Bu ??ekti??imiz bizim g??nah??m??z de??il Plan??n??z iyi! Ben bilmem bunun inanan?? kim? Ama bilirim, gel Silah??m??z dil!', 'Hayki'), (5, 'M??zik yapmak d??????nda bi\' bok yemedim! Polis bi\' ??eyleri problem edip Yine duru??maday??m sen konsere git Ben ayn?? tak??m elbisemle 10 senedir Biri d??n??p desin bana \"??aban bo?? yere de??il\" O g??n kalbimi, ruhumu komple veriyim ama Yarg?? gelip ar??yor bedeli Ya????yorum cehennemi, yan??yor bedenim', 'Server Uraz'), (6, 'Merhaba T??rkiye Bende var h??viyet Ya??amaya ??al??????yoruz hasbelkader gitmeden katakulliye Ekrana s??s diye ????kan ??arlatan, hep fanatik biri! Fesatl??k, k??t?? niyet salg??n gibi Eder daha manip??le! Bu bir temsil ya da piyes! Bu u??aksa bu t??rb??lans! Kom??umuzdu Suriye ??imdi bu gemideki vatanda?? m??? (Yurtta?? m???) Huzurda de??il ??l?? bile topraktakilerin ah?? var Sadece gazeteydi \"H??rriyet\" Sen olabildi??ince ??zg??r ol!', 'Beta'), (7, 'Beton ormanda hayvan olman normal Tutsak g??z altlar??n yine morlar Y??netenler ??a?? d?????? dinozorlar Bu ormanda herkese g??re rol var Sustuk??a s??ra sana gelecek Ayd??n beyinleri bekliyor karanl??k gelecek', 'Asil Slang & Zen-G'), (8, 'Sokak ba???? ??niversite ama k??y okullar?? ??ok terste Ba??a gelenin ideolojisi neyse o anlat??l??r her derste Zengin, fakir ayr?? Torpile ya da paras??na g??re kay??r??r E??itim end??stridir ??n??aattan rant sa??lamaka ayn??! Kiminin kitap al??cak bi\' paras?? yok ????retmen atan??cak ama \"aras??\" yok! Milletvekili bi\' tan??d??k m??, wow Beni anlaman da bu mant??kla zor Bari bi\' k??y okulunun yard??m??na ko?? Her taraf?? kaos Sen de biraz bo??u?? Bu gece uyudu zorla ??ocuk Okula gidecek YOL YAP!', 'Sokrat St'), (9, 'Anlamak m?? yasak olabilir Ama sadece bi\' yan??t?? yok bi\' s??r?? cevap var ko?? git yan??t ara Pe??ine d???? mutlaka kan??t ara Ruhunu demle hep yak??t ara lan Kalbini tut ve de buna tan??k ara Hadi nefesini g??r ve git sanat ara Sorgula sorgula atomlar?? I????k h??z??n?? d??????n ve de git kanat ara sonra U?? u??abildi??in kadar', 'Ozbi'), (10, 'Ben bilmem hi?? kendimi korumak zorunda kalmad??m Bilmem ben bi\' ??ocu??u d??????nmek zorunda olmad??m Hi?? evlendirilmedim Evde dayak g??rmedim Kendi evimde kendi odama zorla hapsedilmedim S??zlerinizi kusmad??m Yurdumdan edilmedim Nefretinizle yanmad??m Yak??larak can vermedim Hi?? karde??im olmad?? Hi?? abimden korkmad??m Okuldan al??nmad??m Ben hi?? ??ld??r??lmedim', 'Deniz Tekin'), (11, '??lkede erkek neden en ??stte minib??ste, evde ya da metrob??ste Taciz ??iddeti hi?? bitmiyo\' K??namakla falan i?? bitmiyo\' Uh, Ah, adam olamad??n??z bu kal??b??n??n adam?? m?? para babalar??n??z? Be??ikta??\'ta be?? tokat, le?? hareketler Cebi dolu ci??erin be?? para etmez Ya??ad??????n kafa ne? ??nsan m??s??n? Biz utand??k ulan! ??nsan m??s??n? ??nsan m??s??n? Bu hale nas??l gelir insan? Nas??l?', 'Yeis Sensura & Sehabe'), (12, 'D????erim derinlere D??nya, d??ns??n ba????m gibi Akl??m?? kaybederek r??ya Nefesim, i?? sesim D????erim derinlere D??nya, d??ns??n ba????m gibi Akl??m?? kaybederek r??ya Nefesim, i?? sesim D????erim derinlere', 'Aspova'), (13, 'Bak Almanya buz gibi morg Bana sor sana diyim Gen??lerin ??o??unda amfetamin, tilidin ya da weed, kokain ya da speed, crack Sana g??re g??zel ama bana g??re de??il Bana g??re de??il, kafana g??re y??r?? bas may??na geber Ederi ka??? Ka??? Ka??? Ka?? paraya bedel? Yeter art??k d??nme teker gibi Dost ol yeter bana Geliyorsan dosdo??ru gel', 'Defkhan'), (14, 'Bi\' kap su ver ??ok mu zor Vicdanl?? ol be lanet Anlamak istemiyosun ama b??t??n bu canlar sana bana emanet Lan bi\' d??????n: \"So??ukta k????ta d????arda tek ba????na ya????yosun Dilini anlayan kimse yok hep tehlike, hep felaket, hep afet\" Ademe bir t??rl?? yaranamazlar Vicdana bakar paraya bakmaz Toplay??p ormana atmak ????z??m de??il Bunlar kurt de??il, ormanda kendi ba??lar??na ya??ayamazlar Onlar?? sen savun, onlar kendi haklar??n?? arayamazlar Bar??naklar dolu Memleket ac?? Semas?? kara Sokak hayvanlar??na tecav??z etmenin, i??kence etmenin cezas?? para \"B??y??k ahlaks??zl??klar i??in b??y??k aptallar laz??md??r\" B??t??n insanlar su??lu de??ildir ama B??t??n hayvanlar masumdur', '??an????er'), (15, 'Gel, g??l olur hapsolur bu su??lu c??mleler! Yenilir hi?? olurum fark etmezler! Susmam, susamam! Korkma yan??ma gel! Gel, g??l olur hapsolur bu su??lu c??mleler! Yenilir hi?? olurum fark etmezler! Susmam SUSAMAM!', '??an????er'), (16, 'Hi??bir ??eyi ya??amak kadar sevme Sana bi d??nya yaratamam da elini tutar??m elbette Vars??n herkes terk etsin seni Sen d??nyay?? terk etme Seni yarg??lam??yorum Ac??n?? tam olarak anlamam m??mk??n de??il biliyorum Kald??ramad??????m y??kleri b??rak??p kendi yolumdan gidiyorum ben Sen de aynaya bak l??tfen \"Seni seviyorum\" de', 'Sokrat St'), (17, 'Ey! Fa??izm ne mi? En amiyane deyimiyle faka basaca????z Beynelmilel el birli??iyle Tek bildi??iniz siz Ve de pek ??ok kazan??n as??l sebebi a????r?? h??rs Bu h??rs bi\' ebedi his. Biz fa??as?? pis de eli temiz bir nesiliz Bu i??in selesi siz de Tekeri gidonu biz Ey, e bi tabi biz de biz gibi bir nes\'lin pe??indeyiz.', 'Aga B'), (18, 'Y??z??ne bakamam y??z??m d????er o yerlere Ayaklar?? ????plakken g??zleri dalar d????lere Ba???? ??n??nde ama beden ????k??yor sefere Yok mecal dizinde Bak, her bi\' g??n?? s??rg??ne Ka??am??yo\' koval??yo\' zalimler Ele g??ne, ele bak??yor o g??zler Kodaman??n paras??n?? ate??e ver Ve de koydu??umun egosunu bi\' yere ser Soka??a bakan??n ad??n?? de??il Yoksulumun, yetimimin ad??n?? ver Zab??talar?? seyyara de??il G??kdelenlere g??nder', 'Mirac'), (19, 'F??rt??nadan kopup giden dallar??n bi\' tanesiyim Fazla yol alm???? ve y??pranm???? ????imde neler d??n??p durur anlatsam tarifi yok Bazen evsiz bi\' ??ocu??un hikayesiyim', 'Mert ??enel'), (20, 'Can pazar??, otobanlar can pazar?? 365 g??n??n riskli Bitmiyo\' gams??z magandas?? ??de kan paras?? Bi\' kaza bayrama matem d??????r??r Y??rek da??lar ac??lar cabas?? Bir sela ????nlar kulaklar??nda Hi?? dinmez yaras?? Trafik ter??r??ne e??lik eder alkol, ??iddet, h??z tutkusu 25 ya????nda y??z binlik arabaya binen gen??lerin yok korkusu ??nce emniyet sonra ho??g??r?? Sab??r, selamet gerekiyor insan Ufac??k bir hata her ??eyi karart??r inan yok d??n??????', 'Kamufle');";
        if ($this->loadDB->query($createTable) and $this->loadDB->query($insertData)) {
            return 1;
        }
    }

}
