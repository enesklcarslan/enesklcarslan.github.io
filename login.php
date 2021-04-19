<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Anasayfa</title>
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
        <div class="container-lg" style="" id="content">
            <div class="row">
                <div class="col-md" id="login-icerik">
                <form action="sonuc.php" method="post" name="Login_Form">
                    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
                    <tr>
                        <td></td>
                        <td style="padding-left:1rem;" valign="top"><h2>Kullanıcı Girişi</h2></td>

                    </tr>
                    <tr>
                        <td align="right" valign="top">Kullanıcı Adı:</td>
                        <td><input style="color:black !important;" name="Username" type="email" class="Input" required></td>
                    </tr>
                    <tr>
                        <td align="right">Şifre:</td>
                        <td><input style="color:black !important;" name="Password" type="password" class="Input" required></td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td><input style="color:black !important;" name="Submit" type="submit" value="Giriş Yap" class="Button3"></td>
                    </tr>
                    </table>
                    </form>
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