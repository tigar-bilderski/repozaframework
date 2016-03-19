var web_path = "http://localhost/repozaframework/";

function changeLanguage(lng){
    $.ajax({
         url: web_path+"languages/loginLanguage/"+lng,
         type: "post",
         dataType: 'json',
         success: function(response){ 
         }   
       });
}

$('#sr').click(function(e){
    e.preventDefault();
    var lng = $(this).attr('data-lng');
    changeLanguage(lng);
});

$('#en').click(function(e){
    e.preventDefault();
    var lng = $(this).attr('data-lng');
    changeLanguage(lng);
});