<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="form-kontrol.js"></script>
    <script src="darkmode.js"></script>
    <title>İletişim</title>
    <meta charset="UTF-8">
</head>
<body>
    <div class="container-fluid" id="header">
        <div class="row">
            <a href="index.html" class="col-md" id="nav">
                Hakkında
            </a>
            <a href="ozgecmis.html" class="col-md" id="nav">
                Özgeçmiş
            </a>
            <a href="sehrim.html" class="col-md" id="nav">
                Şehrim
            </a>
            <a href="mirasimiz.html" class="col-md" id="nav">
                Mirasımız
            </a>
            <a href="hobilerim.php" class="col-md" id="nav">
                İlgi Alanlarım
            </a>
            <a href="login.php" class="col-md" id="nav">
                Login
            </a>
            <a href="contact.php" class="col-md" id="nav">
                İletişim
            </a>
        </div>
        <button class="btn" onclick="toggleDarkMode()"></button>
    </div>

    <div class="container-fluid" id="body">
        <div class="container-lg" id="content">
            <div class="row">
                <div class="col-md" id="subcontent">
                <form action="contact_sonuc.php" method="POST" name="iletisim" onsubmit="return formKontrol()">
                <fieldset>
                    <legend>Kişisel Bilgiler</legend>
                    <label for="ad">Adınız</label>
                    <input type="text" id="ad" name="firstname" placeholder="Adınız">

                    <label for="soyad">Soyadınız</label>
                    <input type="text" id="soyad" name="lastname" placeholder="Soyadınız">
                    <label for="country">Ülkeniz</label>
                    <select style="color:black !important;" id="country" name="country">
                        <option value="Türkiye">Türkiye</option>
                        <option value="Kıbrıs">Kıbrıs</option>
                        <option value="Amerika">Amerika</option>
                        <option value="İngiltere">İngiltere</option>
                        <option value="Fransa">Fransa</option>
                    </select>
                    <label for="tel">Telefon Numaranız</label>
                    <!--<input type="tel" id="tel" name="tel" pattern="[0-9]{10}" placeholder="10 haneli telefon numaranız" required>
                    BU KOD DA ÇALIŞIR, HTML KULLANARAK TEL NO PATTERNINI KONTROL EDER AMA TEL NO ŞABLONU JS KULLANARAK KONTROL EDİLİYOR.-->
                    <input type="text" id="tel" name="tel" placeholder="10 haneli telefon numaranız">
                    <label for="email">E-mail adresiniz</label>
                    <!--<input type="email" id="email" name="email" placeholder="E-mail adresiniz" required><br>-->
                    <input type="text" id="email" name="email" placeholder="E-mail adresiniz"><br>
                    Cinsiyetiniz:<br>
                    <input type="radio" id="erkek" name="cinsiyet" value="Erkek">
                    <label for="erkek">Erkek</label>
                    <input type="radio" id="kadin" name="cinsiyet" value="Kadın">
                    <label for="kadin">Kadın</label>
                    <input type="radio" id="yok" name="cinsiyet" value="Belirtmek İstemiyorum">
                    <label for="yok">Belirtmek İstemiyorum</label>
                </fieldset>
                <br>
                    <br>
                <fieldset>
                    <legend>İçerik</legend>
                    <label for="sebep">Mesaj Konusu</label>
                    <input list="sebepler" type="text" name="sebep" id="sebep">
                    <datalist id="sebepler">
                        <option value="İstek">
                        <option value="Şikayet">
                        <option value="Öneri">
                    </datalist>
                    <label for="subject">Mesajınız</label>
                    <textarea id="subject" name="subject" placeholder="Mesajınız..." style="height:200px;color:black !important;"></textarea>

                    <label class="checkbox"><input type="checkbox" id="onay" name="onay"> Kişisel verilerimin işlenmesini kabul ediyorum.<span class="checkmark"></span> </label>
                </fieldset>
                <br>
                <input type="submit" value="Gönder">
                    <input type="reset" value="Temizle">

                </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="text-center p-3">
            © 2021 Copyright:
            <span class="text-white-50">Enes Kılıçarslan</span>
        </div>
    </footer>

</body>

</html>