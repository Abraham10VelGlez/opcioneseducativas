<html>
 
<head>
 
<title>Ejemplo sencillo de AJAX</title>
 
<script src="../../js/jquery.js"></script>
 
<script>
$(document).ready(function(){
    
})
function uno()
{
    var starboy="holamundo";
    var abraham={starboy:starboy};
    $.ajax({
        url: "vistaj2.php",
        data:abraham,
         type:"POST",
         dataType:"TEXT",
            beforeSend: function(data){
                //alert("proceseando...");
            }
            
    }).done(function(data){
        
        alert("datos enviados con exito");
        $("#kk").html(data);
    })
}
</script>
 
</head>
 
<body>
    <input type="button" id="uno" onclick="uno();" title="oooooo" placeholder="aaaaa"> 
    <div id="kk"></div>
</body>
 
</html>
