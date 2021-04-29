<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="darkmode.js"></script>
    <title>Mesajınız Gönderildi!</title>
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
                    <h2 align="center">Sayın <?php echo $_POST['firstname'].' '.$_POST['lastname'] ?>, İletişim Talebiniz Alınmıştır.</h2>
                    <h3 align="center">Gönderdiğiniz mesajın detayları aşağıdadır.</h3>
                    <br>
                    <table align="center" border="1px">
                        <tr>
                            <th>Ülkeniz:</th>
                            <td><?php echo $_POST['country']?></td>
                        </tr>
                        <tr>
                            <th>Telefon numaranız:</th>
                            <td><?php echo $_POST['tel']?></td>
                        </tr>
                        <tr>
                            <th>Mail adresiniz:</th>
                            <td><?php echo $_POST['email']?></td>
                        </tr>
                        <tr>
                            <th>Cinsiyetiniz:</th>
                            <td><?php echo $_POST['cinsiyet']?></td>
                        </tr>
                        <tr>
                            <th>Mesajınızın konusu:</th>
                            <td><?php echo $_POST['sebep']?></td>
                        </tr>
                        <tr>
                            <th>Mesajınız:</th>
                            <td><?php echo $_POST['subject']?></td>
                        </tr>
                    </table>
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