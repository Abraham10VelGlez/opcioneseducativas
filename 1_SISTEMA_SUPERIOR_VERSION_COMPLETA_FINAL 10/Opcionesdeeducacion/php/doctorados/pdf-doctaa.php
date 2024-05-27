<?php
$idn = $_GET['b'];
$magi=str_replace(" ", "+", $idn);
$key='';
$MA=$filtrodeseguro = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($magi), MCRYPT_MODE_CBC,  md5(md5($key))),"\0");

?><?php
        include '../include/conex-inpdf.php';
	//$MA='811000003';
        //$MM="AA";
        $consulta = "select
        ki9119b.CLAVEINSTI, Ki9119b.NOMINSTI,	
        ki9119b.CLAVECCT, ki9119b.NOMBREESC,
        ki9119b.CARRERA, ki9119b.NOMBRECAR,
        ki9119b.DOMICILIO, ki9119b.COLONIA,
        ki9119b.TELEFONO,  trim(ki9119b.CORREO),ki9119b.TIPO,ki9119b.PAGINA_WEB,ki9119b.S2,
        trim(ki9119b.NOMBREMUN), ki9119b.NOMBRELOC,ki9119b.CONTROL,ki91110.NOMDIREC,ki91110.FAX
        from ki9119b inner join ki91110 on ki9119b.CLAVEINSTI=ki91110.claveinsti WHERE ki9119b.CARRERA='$MA';";
	$resultado = $conexion->query($consulta);
	if($resultado->num_rows > 0 ){
						
		date_default_timezone_set('America/Mexico_City');

		if (PHP_SAPI == 'cli')
			die('Este archivo solo se puede ver desde un navegador web');

		/** Se agrega la libreria PHPExcel */
		require_once '../include/lib/PHPExcel/PHPExcel.php';

		// Se crea el objeto PHPExcel
		$objPHPExcel = new PHPExcel();

		// Se asignan las propiedades del libro
		$objPHPExcel->getProperties()->setCreator("ABRAHAM") //Autor
							 ->setLastModifiedBy("ABRAHAM") //Ultimo usuario que lo modificó
							 ->setTitle("ABRAHAM")
							 ->setSubject("ABRAHAM")
							 ->setDescription("ABRAHAM")
							 ->setKeywords("AVG")
							 ->setCategory("CAILE");
                 $titulo="Secretaría de Educación";
		$tituloReporte = $titulo;//utf8_encode($titulo);
		$titulosColumnas = array('CLAVE','INSTITUCION','CCT','ESCUELA','DOMICILIO','LOCALIDAD','MUNICIPIO','TELEFONO','DIRECTOR','CONTROL','TIPO','CORREO','RVOE','REDES SOCIALES');
		
                
                
                
		$objPHPExcel->setActiveSheetIndex(0)
        	->mergeCells('A1:N1');
						
		// Se agregan los titulos del reporte
		$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A1',$tituloReporte)
->setCellValue('A3',  $titulosColumnas[0])
->setCellValue('B3',  $titulosColumnas[1])
->setCellValue('C3',  $titulosColumnas[2])
->setCellValue('D3',  $titulosColumnas[3])
->setCellValue('E3',  $titulosColumnas[4])
->setCellValue('F3',  $titulosColumnas[5])
->setCellValue('G3',  $titulosColumnas[6])
->setCellValue('H3',  $titulosColumnas[7])
->setCellValue('I3',  $titulosColumnas[8])
->setCellValue('J3',  $titulosColumnas[9])
->setCellValue('K3',  $titulosColumnas[10])
->setCellValue('L3',  $titulosColumnas[11])
->setCellValue('M3',  $titulosColumnas[12])
->setCellValue('N3',  $titulosColumnas[13]);
		
		//Se agregan los datos de los alumnos
		$i = 4; //AAAA PARTIR DEL RENGLON 4 SE ESTA NSERTANDO LOS DATOS PARA LAS CELDAS ....
		while ($fila = $resultado->fetch_array()) {
if($fila['S2']==0){
$rvoevacio="N/A";
}else {
$rvoevacio=$fila['S2'];
}
//echo $avg1= substr($row['NOMBRELOC'],0,-1);
$user = strstr($fila['NOMBRELOC'], ' ', true); // Desde PHP 5.3.0
if(empty($user)){ $user="PENDIENTE";}  else {
$user=    $fila['NOMBRELOC'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...
//
$correoo = strstr($fila['trim(ki9119b.CORREO)'], ' ', true); // Desde PHP 5.3.0
if(empty($correoo)){ $correoo="SIN CORREO";}  else {
$correoo=  $fila['trim(ki9119b.CORREO)'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...

$pweb = strstr($fila['PAGINA_WEB'], ' ', true); // Desde PHP 5.3.0
if(empty($pweb)){ $pweb="NO HAY PÁGINA REGISTRADA";}  else {
$pweb=    $fila['PAGINA_WEB'];
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...

$domicilioo =strstr($fila['DOMICILIO'], ' ', true); // Desde PHP 5.3.0
if(empty($domicilioo)){ $domicilioo="PENDIENTE";}  else {
$domicilioo=$fila['DOMICILIO'];    
} // mostrará SOLO LA PALABRAS HASTA DONDE HAYA UN ESPACIO...

$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('A'.$i,  utf8_encode($fila['CLAVEINSTI']))
->setCellValue('B'.$i,  utf8_encode($fila['NOMINSTI']))
->setCellValue('C'.$i,  utf8_encode($fila['CLAVECCT']))
->setCellValue('D'.$i, utf8_encode($fila['NOMBREESC']))
->setCellValue('E'.$i, utf8_encode($domicilioo))
->setCellValue('F'.$i, utf8_encode($user))
->setCellValue('G'.$i, utf8_encode($fila['trim(ki9119b.NOMBREMUN)']))
->setCellValue('H'.$i, utf8_encode($fila['TELEFONO']))

->setCellValue('I'.$i, utf8_encode($fila['NOMDIREC']))
->setCellValue('J'.$i, utf8_encode($fila['CONTROL']))
->setCellValue('K'.$i, utf8_encode($fila['TIPO']))
->setCellValue('L'.$i, utf8_encode($correoo))
->setCellValue('M'.$i, utf8_encode($rvoevacio))
->setCellValue('N'.$i, utf8_encode($pweb));
                                    $i++;
                
                                    
                                    
                                    
                                    
		}
		
		$estiloTituloReporte = array(
        	'font' => array(
	        	'name'      => 'Verdana',
    	        'bold'      => true,
        	    'italic'    => false,
                'strike'    => false,
               	'size' =>16,
	            	'color'     => array(
    	            	'rgb' => 'FFFFFF'
        	       	)
            ),
	        'fill' => array(
				'type'	=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'	=> array('argb' => 'FF2222')//FF4A4A
			),
            'borders' => array(
               	'allborders' => array(
                	'style' => PHPExcel_Style_Border::BORDER_NONE                    
               	)
            ), 
            'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'rotation'   => 0,
        			'wrap'          => TRUE
    		)
        );

		$estiloTituloColumnas = array(
            'font' => array(
                'name'      => 'Arial',
                'bold'      => true,
                'size' => 8,
                'color'     => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
				'rotation'   => 90,
        		'startcolor' => array(
            		'rgb' => '00FF00'
        		),
        		'endcolor'   => array(
            		'argb' => 'FF431a5d'
        		)
			),
            'borders' => array(
            	'top'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '00FF00' ///ESTEW ES EL ULTIMO CAMBIO
                    )
                ),
                'bottom'     => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array(
                        'rgb' => '143860'
                    )
                )
            ),
			'alignment' =>  array(
        			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        			'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        			'wrap'          => TRUE
    		));
			
		$estiloInformacion = new PHPExcel_Style();
		$estiloInformacion->applyFromArray(
			array(
           		'font' => array(
               	'name'      => 'Arial',               
               	'color'     => array(
                   	'rgb' => '000000'
               	)
           	),
           	'fill' 	=> array(
				'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
				'color'		=> array('argb' => '88DA88')
			),
           	'borders' => array(
               	'left'     => array(
                   	'style' => PHPExcel_Style_Border::BORDER_THIN ,
	                'color' => array(
    	            	'rgb' => '3a2a47'
                   	)
               	)             
           	)
        ));
		 
		$objPHPExcel->getActiveSheet()->getStyle('A1:O1')->applyFromArray($estiloTituloReporte);
		$objPHPExcel->getActiveSheet()->getStyle('A3:O3')->applyFromArray($estiloTituloColumnas);		
		$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A4:O".($i-1));
				
		for($i = 'A'; $i <= 'O'; $i++){
			$objPHPExcel->setActiveSheetIndex(0)			
				->getColumnDimension($i)->setAutoSize(TRUE);
		}
         
                //Esta consulta ayuda a mandar el titulo de la hoja y ademas ayuda a poner titulo a nuestra descarga... de excel....
                include '../include/conex.php';
         $nom=$conector->query("SELECT  SUBSTRING(trim(ki9119b.NOMBRECAR),1,20) FROM ki9119b where ki9119b.CARRERA='$MA' And ki9119b.CARRERA LIKE '8%';");
        while ($row1 = $nom->fetch_assoc()) {$MM=$row1['SUBSTRING(trim(ki9119b.NOMBRECAR),1,20)'];}
	
                
		// Se asigna el nombre a la hoja
		$objPHPExcel->getActiveSheet()->setTitle($MM);

		// Se activa la hoja para que sea la que se muestre cuando el archivo se abre
		$objPHPExcel->setActiveSheetIndex(0);
		// Inmovilizar paneles 
		//$objPHPExcel->getActiveSheet(0)->freezePane('A4');
		$objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,4);

		// Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$MM.'.xlsx"');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');
		exit;
		die();
	}
	else{
		print_r('No hay resultados para mostrar');
                                die();
	}
        ?>