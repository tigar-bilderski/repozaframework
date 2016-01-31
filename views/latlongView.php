<a href='index.php?c=latlong&f=ubaciutabelu' id='ubaciUbazu' target='__blank'>Ubaci sadrzaj CSV fajla u tabelu</a>
    <br/>
    <br/>
    
    Razdaljina od:<br>

    
    <select name='regionList' id='regionList'>
        <option value='izaberi'>izaberi region</option>
<?php

foreach ($niz_regiona as $n_r)
{
    echo "<option value='{$n_r->region_name}'>{$n_r->region_name}</option>";
}
?>
    </select>
    
     <select name='cityList' id='cityList' style="display:none">
     </select>
    <select name='postalList' id='postalList' style="display:none">
     </select>
    <br>
     Razdaljina do:<br>
     <select name='regionDo' id='regionDo' disabled>
         <option>New York</option>
     </select>
     <select name='cityDo' id='cityDo' disabled>
         <option>New York City</option>
     </select>
     <select name='postalDo' id='postalDo' disabled>
         <option value='10000'>10000</option>
     </select>
     <input type='button' id='izracunajBtn' value='Izracunaj razdaljinu' disabled><br /><br />
     <input type='button' id='testapiBtn' value='Test api' disabled><br /><br />
     <div id='apiJson'></div>

<script>
    function loadPostals()
    {
        request = $.ajax({
        url: "index.php?c=latlong&f=ajaxloadpostals",
        type: "post",
        data: "region="+$( "#regionList" ).val()+"&city="+$( "#cityList option:selected" ).text()
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
       
        var obj = jQuery.parseJSON(response);
        var postalsString="";
        jQuery.each(obj, function(i, val) {
            postalsString+="<option value="+val.postal+">"+val.postal+"</option>";
            $( "#postalList" ).html(postalsString);
           // citiesString="";
       //console.log(val.city);
       
    });
    $( "#postalList" ).css("display","inline");
     $("#izracunajBtn").removeAttr('disabled');   
     $("#testapiBtn").removeAttr('disabled');  
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
    //
    }
      $("#testapiBtn").click(function(){
            request = $.ajax({
        url: "index.php?c=latlongapi",
        type: "post",
        data: "postal="+$( "#postalList" ).val()
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
      //console.log(response);
     $("#apiJson").html(response);
           // citiesString="";
       //console.log(val.city);
       
    });
   
    //ajax for loading postal automaticaly
    

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
    });
    $("#izracunajBtn").click(function(){
            request = $.ajax({
        url: "index.php?c=latlong&f=ajaxcalcualtedisatance",
        type: "post",
        data: "postal="+$( "#postalList" ).val()+"&postal1="+$( "#postalDo" ).val()
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
       // console.log(response);
      alert("Razdaljina je: "+response);
           // citiesString="";
       //console.log(val.city);
       
    });
   
    //ajax for loading postal automaticaly
    

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
    });
$("#regionList").change(function(){
    request = $.ajax({
        url: "index.php?c=latlong&f=ajaxloadcities",
        type: "post",
        data: "region="+$( "#regionList" ).val()
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        if(response=="0")
        {
           // alert("Izaberite region");
        }
        else
        {
        var obj = jQuery.parseJSON(response);
        var citiesString="";
        jQuery.each(obj, function(i, val) {
            citiesString+="<option value=''>"+val.city+"</option>";
            $( "#cityList" ).html(citiesString);
           // citiesString="";
       //console.log(val.city);
       
    });
    $( "#cityList" ).css("display","inline");
    //ajax for loading postal automaticaly
    loadPostals();
        }
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        alert(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
});
$("#cityList").change(function(){
    loadPostals();
});
</script>