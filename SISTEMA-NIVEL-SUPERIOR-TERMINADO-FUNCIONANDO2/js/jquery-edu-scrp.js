function encriptar(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle").load('php/instituciones/Combos-dependientessubnivel.php?tres='+response)
                        //javascript:window.open("php/instituciones/Combos-dependientessubnivel.php?tres="+response);
                        
                }
                
   })
   return false;
   }
   
   function encriptarm2(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle").load("php/instituciones/Combos-dependientessubnivel.php?tres="+response)
                        //javascript:window.open("php/instituciones/Combos-dependientessubnivel.php?tres="+response);
                        
                }
                
   })
   return false;
   }
   function encriptarm3(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle2").load("php/tec.superior/Combos-dependientes-tecnosupe.php?tec="+response)
                       //javascript:window.open("php/tec.superior/Combos-dependientes-tecnosupe.php?tec="+response);
                        
                }
                
   })
   return false;
   }
   function encriptarm4(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                        $("#detallle3").load("php/licenciatura/Combos-dependientes-licencia.php?liknkiado="+response)
                       ///javascript:window.open("php/licenciatura/Combos-dependientes-licencia.php?liknkiado="+response);
                        
                }
                
   })
   return false;
   }
   function encriptarm5(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle4").load("php/especialidades/Combos-dependientes-especialidades.php?iaDES2="+response)
                      // javascript:window.open("php/especialidades/Combos-dependientes-especialidades.php?iaDES2="+response);
                        
                }
                
   })
   return false;
   }
   function encriptarm6(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle5").load("php/maestrias/Combos-dependientes-maestria.php?cccc="+response)
                       //javascript:window.open("php/maestrias/Combos-dependientes-maestria.php?cccc="+response);
                        
                }
                
   })
   return false;
   }
   function encriptarm7(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle6").load("php/doctorados/Combos-dependientes-doctorado.php?doci="+response)
                       //javascript:window.open("php/doctorados/Combos-dependientes-doctorado.php?doci="+response);
                        
                }
                
   })
   return false;
   }
function encriptarm8(parametro){
   var k={parametro:parametro};
   //alert(k);
   $.ajax({
                url:   'php/json-avg-encript/proceso-json.php',
                data:  k,
                type:  'POST',
                dataType:'JSON',
                beforeSend: function () {
                        //$("#gatt").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
            //alert("aaaaaaaaaaa");
                       // $("#gatt").html(response);
                       $("#detallle7").load("php/municipio/Combos-dependientes-munic.php?ici="+response)
                       //javascript:window.open("php/municipio/Combos-dependientes-munic.php?ici="+response);
                        
                }
                
   })
   return false;
   }
   function encriptarm9(parametro){
//alert("encriptarm9");
//alert(parametro);
//var k={parametro:parametro};
//alert(k);
  
   $.ajax({
                url:   'php/busquedarapida/modulo888.php',
                data:  {parametro:parametro},
                type:  'POST',
                beforeSend: function () {
                //$("#detallle8").html("Procesando, espere por favor...").fadeOut(5000);
                },
                success:  function (response) {
                       $("#detallle8").html('');
                       $("#detallle8").prepend('<div id="id_fantasma">'+response+'</div>');
                       return false;
                     
                        
                }
                
   })
   return false;
   }