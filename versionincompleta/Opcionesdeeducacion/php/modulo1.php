<!DOCTYPE html>
<html lang="es">
<head>
<script language="javascript" src="js/jquery-edu-m.js"></script>
</head>
<body>

                <div class="form-row" id="modulo1">
                    
                    <?php
                    
                     include 'include/conex.php';
                     $sqltotal=$conector->query("select count(distinct claveinsti) as total from ki91110;");
                     while ($var=$sqltotal->fetch_assoc()) {
                     echo "<center><b>(".$var['total']." Instituciones)</b></center><br>";
                     }
                    ?>
                    
            </div>
    
    <div class="form-row">
                  SELECCIONA EL TIPO DE INSTITUCIÓN:
                    
                    <select id="ins" name="ins" class="span6">
                    <option value='#'>Seleccione</option>;
                    <?php
                   
                    $sql="select * from denominacion";
                    $proceso = $conector->query($sql);
                    while ($row = $proceso->fetch_assoc()) {
                        echo "<option value='".$row["id"]."'>".$row['nom']."</option>";
                    }
                    ?>
                    </select>
        
    </div>
    
                    
            <div id="modul" class="span12"></div>
            
            
</body>

</html>
