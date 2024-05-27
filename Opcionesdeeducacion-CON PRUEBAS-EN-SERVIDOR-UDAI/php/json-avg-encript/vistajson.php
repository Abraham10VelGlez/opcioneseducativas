<html>
 
<head>
 
<title>Ejemplo sencillo de AJAX</title>
 
<script src="../../js/jquery.js"></script>
 
<script>
function realizaProceso(){
        var parametros = "2";
        $.ajax({
                data:  parametros,
                url:   'proceso-json.php',
                type:  'post',
                dataType:'json',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        });
}
</script>
 
</head>
 
<body>
 
Introduce valor 1
 
<input type="text" name="caja_texto" id="valor1" value="0"/> 
 
 
Introduce valor 2
 
<input type="text" name="caja_texto" id="valor2" value="0"/>
 
Realiza suma
 
<input type="button"  onclick="realizaProceso()" value="Calcula"/>
 
<br/>
 
Resultado: <span id="resultado">0</span>
 
</body>
 
</html>
