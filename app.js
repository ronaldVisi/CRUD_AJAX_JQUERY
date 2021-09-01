 $(document).ready(function(){
             $("button").click(function (){
                 var usuario=$("#nombre").val();
                 $.get(  "servidor.php",
                         {nombre:usuario},
                         function (respuesta) {
                         $("#info").text(respuesta);
                })
             })
             
             //DATOS OBENER DE UN JSON SIMPLE 
              $("#nombre2").click(function (){
                   console.log("dadjhsaj");
                 
                 $.get(  "datos.json",function (datos) {
                             console.log(datos);
                         $('#info').text(datos.apellido)
                })
             })
              //DATOS OBENER DE UN JSON arreglo de JSON 
              $("#nombre3").click(function (){
                 $.get(  "datos.json",function (datos) {
                    if($("#info").is(":empty")) {//PARA QUE SOLO MUESTER UNA VEZ AL CLIKEAR 
                        console.log("sada")
                         $.each(datos,function(index,obj){
                         $("#info").append(obj.name+"<br/>");
                     })
                       
                    }      
                          
                })
             })
             
             //USO DEL METODO AJAX ( RECIVIENDO DATOS DEL SERVIDOR )
              $("#nombre4").click(function (){
                  $.ajax({
                      url:"datos.json",
                      type:"GET",
                      dataType: 'json',
                      success:function(datos){
                          
                          $.each(datos,function (index,obj){
                              if($("#info").is(":empty")){//PARA QUE SOLO MUESTER UNA VEZ AL CLIKEAR
                                  console.log(datos);
                                  $("#info").append(obj.name);
                              }
                          })
                      },
                      error:function(xhr,status,error){
                          console.log(xhr);
                          console.log(status);
                          console.log(error);
                      }
                  })
              });
              
              //USO DEL METODO AJAX (ENVIANDO  DATOS AL SERVIDOR )
              $("#nombre4").click(function (){
                  $.ajax({
                      url:"datos.json",
                      type:"GET",
                      dataType: 'json',
                      success:function(datos){
                          
                          $.each(datos,function (index,obj){
                              if($("#info").is(":empty")){//PARA QUE SOLO MUESTER UNA VEZ AL CLIKEAR
                                  console.log(datos);
                                  $("#info").append(obj.name);
                              }
                          })
                      },
                      error:function(xhr,status,error){
                          console.log(xhr);
                          console.log(status);
                          console.log(error);
                      }
                  })
              });
              
              
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'servidor.php',
            data: {password:"ronald",
                   username:"asas",
                   nombre:"alvaro"},
            success: function(response)
            {
                if ( console && console.log ) {
                    $("#valorD").append(response);
                     console.log( response+"La solicitud se ha completado correctamente." );
                    }
                //  var jsonData = JSON.parse(response);
 
                // user is logged in successfully in the back-end
                // let's redirect
            }
       });
     });
              
             
})