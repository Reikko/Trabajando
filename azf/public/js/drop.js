$("#estado_sel").change(function ( event) {
    $.get("towns/"+event.target.value+"",function(response,state){
        $("#colony_sel").empty();
        for(i=0 ; i<response.length;i++)
        {
            $("#colony_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_col+"</option>");
        }
    });
});

$("#estado_sel").change(function ( event) {
    $.get("towns/"+event.target.value+"",function(response,state){
        $("#colony_sel").empty();
        for(i=0 ; i<response.length;i++)
        {
            $("#colony_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_col+"</option>");
        }
    });
});