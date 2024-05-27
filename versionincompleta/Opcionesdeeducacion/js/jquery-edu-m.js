$(document).ready(function(){ 
    
  
    $("#ins").change(function () {
        $("#ins option:selected").each(function () {
            ti = $(this).val();//alert(ti);
            $('#modul').html('');
            $('#modul').load('php/instituciones/Combos-dependientes.php?A='+ti);
            });
            return false;
        });
     
   $("#tecnk").change(function () {
   		$("#tecnk option:selected").each(function () {
                        valorador();             
			tec = $(this).val();//alert(tec);
                        if(tec =="#" || tec ==" " || tec==""){
                             $("#tecsuin").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);
                        }else{
                            encriptarm3(tec);
            //javascript:window.open("php/tec.superior/Combos-dependientes-tecnosupe.php?tec="+tec);
                        }
        });return false;
   });
   
   $("#lic").change(function () {
   		$("#lic option:selected").each(function () {
                        valorador();             
			likntr = $(this).val();///alert(likntr);   
                        if(likntr=="#" || likntr==" " || likntr==""){
$("#encia").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);                            
                        }else{
                            encriptarm4(likntr);
//javascript:window.open("php/licenciatura/Combos-dependientes-licencia.php?liknkiado="+likntr);
                        }
        });return false;
   });
   $("#espec").change(function () {
   		$("#espec option:selected").each(function () {
                        valorador();             
			iali = $(this).val();//alert(ialida);    
                        if(iali=="#" || iali==" " || iali==""){
$("#des").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);                            
                        }else{
                            encriptarm5(iali);
//javascript:window.open("php/especialidades/Combos-dependientes-especialidades.php?iaDES2="+iali);
                        }
        });return false;
   });
   $("#maa").change(function () {
   		$("#maa option:selected").each(function () {
                        valorador();             
			es = $(this).val();//alert(es);      
                        if(es=="#" || es==" " || es==""){
$("#trias").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);                            
                        }else{
                            encriptarm6(es);
                        //javascript:window.open("php/maestrias/Combos-dependientes-maestria.php?cccc="+es);
                        }
        });return false;
   });
   $("#doct").change(function () {
   		$("#doct option:selected").each(function () {
                        valorador();             
			ra = $(this).val();//alert(ra);           
                        if(ra=="#" || ra==" " || ra==""){
$("#doo").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);                            
                        }else{
                            encriptarm7(ra)
                        //javascript:window.open("php/doctorados/Combos-dependientes-doctorado.php?doci="+ra);
                        }
        });return false;
   });
   $("#mun").change(function () {
   		$("#mun option:selected").each(function () {
                        valorador();             
			munici = $(this).val();//alert(ici);  
                        if(munici=="#" || munici==" " || munici==""){
$("#badbb").html('<MARQUEE WIDTH=20% HEIGHT=40 ALIGN=BOTTOM style="color:#FF0000;">Selecciona un Carrera, para Continuar</MARQUEE>').show().fadeOut(9000);                            
                        }else{
                            encriptarm8(munici)
                        //javascript:window.open("php/municipio/Combos-dependientes-munic.php?ici="+munici);
                        }
        });return false;
   });
   return false;
});
