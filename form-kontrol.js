function formKontrol()
{
    var ad=document.forms["iletisim"]["firstname"].value;
    var soyad=document.forms["iletisim"]["lastname"].value;
    var tel=document.forms["iletisim"]["tel"].value;
    var email=document.forms["iletisim"]["email"].value;
    var cinsiyet=document.forms["iletisim"]["cinsiyet"].value;
    var konu=document.forms["iletisim"]["sebep"].value;
    var mesaj=document.forms["iletisim"]["subject"].value;
    var telformat = /^\d{10}$/;
    var mailformat = /^\S+@\S+\.\S+$/;
    var onay=document.getElementById("onay");

    if (ad=="")
    {
        alert("Ad kısmı boş bırakılamaz!");
        return false;
    }
    else if (soyad=="")
    {
        alert("Soyad kısmı boş bırakılamaz!");
        return false;
    }
    else if (tel=="")
    {
        alert("Telefon kısmı boş bırakılamaz!");
        return false;
    }
    else if (telformat.test(tel) == false)
    {
        alert("Telefon formatı yanlış.\n" +
            "Telefonunuzu 10 haneli olacak şekilde giriniz!");
        return false;
    }
    else if (email=="")
    {
        alert("E-mail kısmı boş bırakılamaz!");
        return false;
    }
    else if (mailformat.test(email) == false)
    {
        alert("E-mail formatı yanlış.\n" +
            "E-mailinizi adres@domain.com şeklinde giriniz!");
        return false;
    }
    else if (cinsiyet=="")
    {
        alert("Cinsiyet kısmı boş bırakılamaz!");
        return false;
    }
    else if (konu=="")
    {
        alert("Mesaj konusu kısmı boş bırakılamaz!");
        return false;
    }
    else if (mesaj=="")
    {
        alert("Mesaj kısmı boş bırakılamaz!");
        return false;
    }
    else if (!(onay.checked))
    {
        alert("Mesaj gönderebilmek için kişisel verilerinizin işlenmesini kabul etmelisiniz!");
        return false;
    }
}