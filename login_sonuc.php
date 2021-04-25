<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php
    if($_POST['Username']=='g201210016@sakarya.edu.tr' && $_POST['Password']=='g201210016'){
        echo "<title>Giriş Başarılı!</title>";
    }
    else{
        echo "<title>Giriş Başarısız!</title>";
    }
        ?>
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
    </div>
    <div class="container-fluid" id="body">
        <div class="container-lg" id="content">
            <div class="row">
                <div class="col-md" align="center" id="login-icerik">
                    <?php
                    if($_POST['Username']=='g201210016@sakarya.edu.tr' && $_POST['Password']=='g201210016'){
                        echo nl2br('<span style="color:green !important;">Giriş işlemi başarılı! Hoşgeldiniz "g201210016".
                        5 saniye içinde anasayfaya yönlendiriliyorsunuz...</span>');
                        header("refresh:5;url=/");
                    }
                    else{
                        echo nl2br('<span style="color:red !important;">Giriş işlemi başarısız! Login sayfasına yönlendiriliyorsunuz...
                        Lütfen tekrar deneyiniz.</span>');
                        header("refresh:3;url=login.php");
                    }
                    ?>
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