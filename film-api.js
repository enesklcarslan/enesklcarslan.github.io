function apiCall(){
    var randomNumber = Math.floor((Math.random() * 6155529) + 1);
    randomNumber = ("0000000" + randomNumber).substr(-7,7);//padding number olması için, sayı ne olursa olsun 7 haneli olarak yazdırılacak
    //console.log(randomNumber);
    $.getJSON('https://omdbapi.com/?i=tt' + randomNumber + '&apikey=d5a59bd1').then(function(data){
        console.log(data);
        if(data.Response == "False")
            apiCall();
        for(var i = 0; i < 10; i++)
            $('.fa-star').eq(i).removeClass('checked');
        if(data.Poster!='N/A')
            $('#poster').attr('src', data.Poster);
        else
            $('#poster').attr('src', 'img/film-bulunamadi.png');
        $('#ismi').html(data.Title);
        $('#yili').html(data.Year);
        if(data.Language == 'N/A' || data.Language == 'None')
            $('#dili').html('Yapım dili veritabanında bulunamadı!');
        else
            $('#dili').html(data.Language);
        $('#oyunculari').html(data.Actors);
        var puan = 0;
        if(data.imdbRating == "N/A")
        {
            puan = Math.round(data.imdbRating);
            $('#puani').html('IMDb puanı bulunamadı!');
            $('.fa-star').addClass('hidden');
        }
        else if(data.imdbRating != 'N/A')
        {
            $('#puani').html(data.imdbRating);
            puan = Math.round(data.imdbRating);
            $('.fa-star').removeClass('hidden');
            for(var i = 0; i < puan; i++)
            {
                $('.fa-star').eq(i).addClass('checked');
            }
        }
    })
}
//apiCall();
