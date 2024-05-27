<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Resultado_Query.xls");
header("Pragma: no-cache");
header("Expires: 0");
//$nn=$_GET['nn'];
$nn=$_POST['nn'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
    <body>
        <table border='3'>
<?php
echo $nn;
?>
            </table>
        
</body>
</html>