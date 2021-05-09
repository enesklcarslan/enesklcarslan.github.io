<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="darkmode.js"></script>
    <title>Giriş Yap</title>
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
            <a href="login.php" class="col-md active" id="nav">
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
                <div class="col-md" id="login-icerik">
                <form action="login_sonuc.php" method="POST">
                <fieldset style="margin-top:70px;margin-bottom:200px;">
                    <legend>Kullanıcı Girişi</legend>
                    <label for="id">Kullanıcı Adı</label>
                    <input type="email" id="Username" name="Username" placeholder="Kullanıcı Adınız..." required>

                    <label for="sifre">Şifre</label>
                    <input id="Password" name="Password" type="password" placeholder="Şifreniz..." required >
                    <input type="submit" value="Giriş Yap">
                </fieldset>
                <br>
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