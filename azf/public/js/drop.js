$("#estado_sel").change(function ( event) {
    $.get("estado/"+event.target.value+"",function(response,state){
        console.log(event);
        $("#colony_sel").empty(response);
        $("#frany_sel").empty(response);
        for(i=0 ; i<response.length;i++)
        {
            $("#colony_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_col+"</option>");
        }
    });
});

$("#colony_sel").change(function ( event) {
    $.get("col/"+event.target.value+"",function(response,state){
        console.log(event);
        $("#frany_sel").empty(response);
        for(i=0 ; i<response.length;i++)
        {
            $("#frany_sel").append("<option value = \""+response[i].id+"\"> "+response[i].nom_frac+"</option>");
        }
    });
});




