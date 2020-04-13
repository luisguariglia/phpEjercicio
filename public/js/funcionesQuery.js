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

function eliminar(id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:"/abm/persona/" + id,
        type:'DELETE',
        dataType: 'json',
        data: {"id": id},
        success: function (response)
        {
            console.log(response); // see the reponse sent
            if(response.ok){
                alert("Eliminado!")
            }
        },
        error: function(xhr) {
         console.log(xhr.responseText); // this line will save you tons of hours while debugging

        }
    })
}
