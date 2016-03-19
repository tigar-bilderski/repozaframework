var web_path = "http://localhost:8888/repozaframework/";

function changeLanguage(lng){
    $.ajax({
         url: web_path+"languages/loginLanguage/"+lng,
         type: "post",
         dataType: 'json',
         success: function(response){
             console.log(response);
         }   
       });
}