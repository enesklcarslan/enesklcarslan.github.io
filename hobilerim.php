<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="film-api.js"></script>
    <script src="darkmode.js"></script>
    <title>İlgi Alanlarım</title>
    <meta charset="UTF-8">
</head>
<body onload="apiCall()">
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
                <div align="center" class="col-md" id="subcontent">
                    Bu sayfada, film ve dizi izlemeyi çok sevdiğim için OMDb API
                    servisi kullanarak oluşturduğum JQuery uygulaması sayesinde
                    butona basarak istediğiniz kadar rastgele film/dizi önerisi
                    alabilir ve filmin/dizinin bilgilerini görebilirsiniz.
                    <br><br><img class="poster" id="poster" src=""><br>
                        Filmin/Dizinin Adı: <span id="ismi"></span><br>
                        Yapım Senesi: <span id="yili"></span><br>
                        Dili: <span id="dili"></span><br>
                        Oyuncular: <span id="oyunculari"></span><br>
                    <br><br>
                    <button style="color:black !important;" onclick="apiCall()">Rastgele Film Önerisi Yap</button>
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