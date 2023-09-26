$(document).ready(function(){

    let mainUrl = window.location.href.split("/").slice(0,4).join("/");
    let periodeUrl = mainUrl + '/stockOpname/getPeriodeSelect';
    let regionalUrl = mainUrl + '/masterdata/location/getRegionalSelect';
    let subRegionalUrl = mainUrl + '/masterdata/location/getSubRegionalSelect';
    let locationUrl = mainUrl + '/masterdata/location/getLocationUrl';
    let departmentUrl = mainUrl + '/masterdata/department/getDepartmentSelect';
    let classUrl = mainUrl + '/masterdata/class/getClassSelect';
    let subClassUrl = mainUrl + '/masterdata/class/getClassSelect';
    
    $.post(periodeUrl, function(data, xhr){
        $('#periode').html(data);
    });
    
    $.post(regionalUrl, function(data, xhr){
        $('#regional').html(data);
    });
    
    $('#regional').change(function(){
        let id = $(this).val(); 
        $.post(subRegionalUrl,{ id : id}, function(data, xhr){
            $('#sub_regional').html(data);
        });
    });
    
    

});