$("#registro").click(function(){
    debug.log("funciona");
    var dato= $("#genre").val();
    var route = "http://localhost:8000/abm/persona";
    var token = $("#token").val();
    $.ajax({
        url:route,
        headers:{'X-CSRF-TOKEN': token},
        type:'POST',
        dataType: 'json',
        data: {genre: dato}
    })
});