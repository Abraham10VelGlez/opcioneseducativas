<?php
$var=$_POST['parametro']; 
//$var="COMOES ES A 123"; 
//$var=$_POST['parametros'];
$key='';
$resultado = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $var, MCRYPT_MODE_CBC, md5(md5($key))));
//$resultado="hola mundo";
//$filtrodeseguroavg = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($resultado), MCRYPT_MODE_CBC,  md5(md5($key))),"\0");
///header('Content-type: application/json; charset=utf-8');
echo json_encode($resultado);
  //  echo $resultado;
//echo json_encode($filtrodeseguroavg);

    ?>