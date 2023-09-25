$(document).ready(function(){

    let mainUrl = window.location.href.split("/").slice(0,4).join("/");
    let regionalUrl = mainUrl + '/masterdata/regional/getRegionalSelect';
    
    $.post(regionalUrl, function(data, xhr){
        $('#regional').html(data);
    });


});