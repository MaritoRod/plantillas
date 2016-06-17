$(document).ready(function(){
    //Universidad
    $("#universidad").keydown(function(){
            $("#lblUniversidad").text($("#universidad").val());
        
    });
    
    $("#universidad").keyup(function(){
            $("#lblUniversidad").text($("#universidad").val());
    });
    
    //Titulo
    $("#titulo").keydown(function(){
            $("#lblTitulo").text($("#titulo").val());
    });
    
    $("#titulo").keyup(function(){
            $("#lblTitulo").text($("#titulo").val());
    });
    
    //Nombre
    $("#nombre").keydown(function(){
            $("#lblNombre").text($("#nombre").val());
        
    });
    
    $("#nombre").keyup(function(){
            $("#lblNombre").text($("#nombre").val());
    });
    
    //Generar
    $("#btnInicio").click(function(){
        var html = $("#divDiploma").html();
        
        window.location = "diploma2.php?html=" + html;
    });
});