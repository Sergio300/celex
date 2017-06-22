<?php

   
   include('../js/PHP_1_8/Classes/PHPExcel.php');
  include('../js/PHP_1_8/Classes/PHPExcel/Cell/AdvancedValueBinder.php');
  // include ('dynamic/conf/config.php');
  // include(DIR_LIB.'usuarios.php');
  // include(DIR_LIB.'connecti.php');

  $name=$_POST['nombre'];
  $apP=$_POST['apP'];
  $apM=$_POST['apM'];
  $matricula=$_POST['matricula'];

   error_reporting(E_ALL ^ E_DEPRECATED); ini_set("display_errors", 1);

   
 //  include('dynamic/scripts/PHPExcel/Classes/PHPExcel.php');
  // include ('dynamic/conf/config.php');
  // include(DIR_LIB.'usuarios.php');
  // include(DIR_LIB.'connecti.php');
  

  // session_start();
   PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );  

  /*Style of Tittle*/
$tittle = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$tittle->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,   
    ),
    'font' => array( /*Attribute of text*/
      'bold' => true,
      'size' => 15,
      "color" => array("rgb" => "FF0000")
    )

));

$subtittle = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$subtittle->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER
      
    ),
    'font' => array( /* Attribute of text*/
      'bold' => true,
      'size' => 10,
      "color" => array("rgb" => "FFFFFF")
    ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => '4169e1'
        ),
        'endcolor' => array(
          'argb' => '4169e1'
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,      
        'wrap'      => TRUE
      ),
     'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
));




  /*Style of firts colum */
$styleofColum1 = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$styleofColum1->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false,
      'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER
      
    ),
    'font' => array( /* Attribute of text*/
      'bold' => true,
      'size' => 10,
      "color" => array("rgb" => "FFFFFF")
    ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FF0000'
        ),
        'endcolor' => array(
          'argb' => 'FF0000'
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,      
        'wrap'      => TRUE
      ),
     'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )
));

$styleofColum2 = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$styleofColum2->applyFromArray(
  array('alignment' => array( 
      'wrap' => false    
      
    ),
    'font' => array( /* Attribute of text*/
      'bold' => true,
      'size' => 10,
      "color" => array("rgb" => "FFFFFF")
    ),
      'fill' => array(
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FF8000'
        ),
        'endcolor' => array(
          'argb' => 'FF8000'
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,     
        'wrap'      => TRUE
      ),
      'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )

));

$styleofColum3 = new PHPExcel_Style(); /*Create variable of PHPExcel_Style*/
$styleofColum3->applyFromArray(
  array('alignment' => array( /* Attribute of text*/
      'wrap' => false     
    ),
    'font' => array( /* Attribute of text*/
      'bold' => true,
      'size' => 10,
      "color" => array("rgb" => "FFFFFF")
    ),
      'fill' => array(
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => '006600'
        ),
        'endcolor' => array(
          'argb' => '006600'
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,   
        'wrap'      => TRUE
      ),
      'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
        )
    )

));


// /*Style of tittle*/
$styleTittle = array( /*Create variable of PHPExcel_Style*/
      'font' => array( /* Attribute of text*/
        'name'  => 'Arial',
        'bold'  => true,
        'size' => 13,
        'color' => array(
          'rgb' => '#FFFFFF'
        )
      ),
      'fill' => array(
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FDF4E3'
        ),
        'endcolor' => array(
          'argb' => 'FDF4E3'
        )
      ),
      'borders' => array(
        'top' => array(
          'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
          'color' => array(
            'rgb' => '000000'
          )
        ),
        'bottom' => array(
          'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
          'color' => array(
            'rgb' => '000000'
          )
        )
      ),
      'alignment' =>  array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      )
    );

    $styleofText = new PHPExcel_Style();
    $styleofText->applyFromArray( array(
      'font' => array(
        'name'  => 'Arial',
        'bold' => true,
      'size' => 9,
        'color' => array(
          'rgb' => '000000'
        )),
      'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FBF4F4'
        ),
        'endcolor' => array(
          'argb' => 'FBF4F4'
        )
      ),
      'borders' => array(
          'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
          )
        )
    ));
    $styleofText2 = new PHPExcel_Style();
    $styleofText2->applyFromArray( array(
      'font' => array(
        'name'  => 'Arial',
        'bold' => true,
      'size' => 9,
        'color' => array(
          'rgb' => '000000'
        )),
      'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      //'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'FEF1E7'
        ),
        'endcolor' => array(
          'argb' => 'FEF1E7'
        )
      ),
      'borders' => array(
          'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
          )
        )
    ));

    $styleofText3 = new PHPExcel_Style();
    $styleofText3->applyFromArray( array(
      'font' => array(
        'name'  => 'Arial',
        'bold' => true,
      'size' => 9,
        'color' => array(
          'rgb' => '000000'
        )),
      'alignment' =>  array(
        'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'wrap'      => TRUE
      ),
      'fill' => array( /* Attribute of line*/
        'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
      //'rotation'   => 90,
        'startcolor' => array(
          'rgb' => 'E9F0D9'
        ),
        'endcolor' => array(
          'argb' => 'E9F0D9'
        )
      ),
      'borders' => array(
          'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
            'color' => array('rgb' => '000000')
          )
        )
    ));


    /*Create object Excel the name 'objPHPExcel'*/
   error_reporting(E_ALL);
     ini_set('display_errors', 1);
     $objPHPExcel = new PHPExcel();

       /*Top of title*/
    $objPHPExcel->getActiveSheet()->SetCellValue("A1", "Instituto Politecnico Nacional");
    $objPHPExcel->getActiveSheet()->SetCellValue("A2", "Centro de Estudios Cientificos y Tecnologicos #8");
    $objPHPExcel->getActiveSheet()->SetCellValue("A3", "Narciso Bassols");
    $objPHPExcel->getActiveSheet()->SetCellValue("A4", "Cursos Extracurriculares de Lenguas Extranjeras (CELEX)");
    $objPHPExcel->getActiveSheet()->SetCellValue("A5", "Formato Multiple");

    // /*Style*/
    $objPHPExcel->getActiveSheet()->setSharedStyle($tittle, "A1:A1");
    $objPHPExcel->getActiveSheet()->getStyle('A2:A4')->applyFromArray($styleTittle);
    $objPHPExcel->getActiveSheet()->setSharedStyle($subtittle, "A5:A5");

    // /*MergeCell*/
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:I1');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A2:I2');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A3:I3');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A4:I4');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A5:I5');

    // /*Title of table*/
    $objPHPExcel->getActiveSheet()->SetCellValue("A6","Nombre");
    $objPHPExcel->getActiveSheet()->SetCellValue("B6","Apellido Paterno");
    $objPHPExcel->getActiveSheet()->SetCellValue("C6","Apellido Materno");
    $objPHPExcel->getActiveSheet()->SetCellValue("D6","Boleta");
    $objPHPExcel->getActiveSheet()->SetCellValue("E6","Nivel");
    $objPHPExcel->getActiveSheet()->SetCellValue("F6","Carrera");
    $objPHPExcel->getActiveSheet()->SetCellValue("G6","Calificacion");

    

    /*Style of tittle of table*/
   $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "A6:G6");
    // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "B6:B6");
    // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "C6:C6");
    // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "D6:D6");
    // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "E6:E6");
    // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "F6:F6");
    // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "G6:G6");


    /*Merge  title of table*/
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('A6:A6');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('B6:B6');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('C6:C6');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('D6:D6');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('F6:F6');
    $objPHPExcel->setActiveSheetIndex(0)->mergeCells('G6:G6');


   //  /*Dimension of columns*/
    $objPHPExcel->getActiveSheet()->getColumnDimension("A")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("B")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("C")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("D")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("E")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("F")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("G")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("H")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("I")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("J")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("K")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("L")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("M")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("N")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("O")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("P")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("Q")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("R")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("S")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("T")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("U")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("V")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("W")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("X")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("Y")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("Z")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("AA")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("AB")->SetAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension("AC")->SetAutoSize(true);



   //  /*Panel items first section of table*/
   //  $objPHPExcel->getActiveSheet()->SetCellValue("A6","Apoyo SEP");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("B6","No solicitud");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("C6","Número de registro");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("D6","Estatus Estatus");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("E6","Fecha confirmación dictamen");

   //  /*Style of firts section of table*/
   //  //$objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum1, "A6:E6");

   //  /*Panel items second section of table*/
   //  $objPHPExcel->getActiveSheet()->SetCellValue("F6","Nombre");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("G6","Edad");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("H6","Nivel Académico");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("I6","Curp");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("J6","mail1");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("K6","mail2");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("L6","IF");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("M6","IES Formadora");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("N6","Generación");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("O6","Subsistema");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("P6","Folio SEMS");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("Q6","Plantel de adscripción");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("R6","Entidad Federativa");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("S6","Municipio");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("T6","Programa formativo");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("U6","Tipo");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("V6","Opción elegida");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("W6","Nombre de trabajo");

   //  /*Style of second section of table*/
   // // $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum2, "F6:W6");

   //  /*Panel items third section of table*/
   //  $objPHPExcel->getActiveSheet()->SetCellValue("X6","Evaluador");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("Y6","Núcleo 1");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("Z6","Núcleo 2");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("AA6", "Núcleo 3");
   //  $objPHPExcel->getActiveSheet()->SetCellValue("AB6","Dictamen Final");


    /*Style of thrid section of table*/
//  $objPHPExcel->getActiveSheet()->setSharedStyle($styleofColum3, "X6:AB6");


// $query = "select p.beneficiario_sems, p.id_participante, p.num_registro, concat(p.nombre,' ',p.a_paterno,' ',p.a_materno) as nombre, e.escolaridad,p.curp,ies.siglas,ies.nombre_ies, p.id_generacion, s.subsistema, p.institucion, ef.nombre_entidad,l.nombre_localidad,pr.programa, pr.tipo_programa,tt.nombre_tipo_trabajo,p.dictamen_cee,g.generacion,p.aceptado_lista, p.revisado_lista,  p.email1, p.email2, p.envio_conf_dict, p.revision_dictamen, p.folio_sems, p.tercer_dictamen, p.nombre_trabajo from participantes as p LEFT JOIN ies ON ies.id_ies=p.id_ies_programa  JOIN escolaridad as e ON e.id_escolaridad=p.id_escolaridad JOIN subsistemas_temp as s ON s.id_subsistema=p.id_subsistema JOIN entidad_federativa_temp as ef ON ef.id_entidad=p.id_entidad1 JOIN localidades as l ON l.id_localidad=p.id_localidad1 JOIN programa_formativo_reporte as pr ON p.id_programa=pr.id_programa JOIN tipos_trabajos as tt ON p.opcion_trabajo=tt.id_tipo_trabajo JOIN generaciones as g ON p.id_generacion=g.id_generacion where p.id_convocatoria=7";


   /*initializable variable i in 7*/
  // $i = 0;
  // $c = 0;
  $k = 7;

  /*variable result contain values of consult and function an_query generated with new mysqli PDO */
//  $result = an_queryi($query);

  $rows=$objPHPExcel->setActiveSheetIndex(0);




// foreach ($result as $row2){

  

//  //$result2 = $result->fetch_array(MYSQLI_BOTH);

//   $query_evaluacion = "SELECT * FROM eva_part_7ca AS EV JOIN evaluadores AS E ON E.id_evaluador=EV.id_evaluador WHERE EV.id_participante = $row2[id_participante] ORDER BY EV.fecha_dictamen DESC";
//       $result_evaluacion=an_queryi($query_evaluacion);



        $rows->setCellValue('A'.$k,$name);
     $rows->setCellValue('B'.$k,$apP);
     $rows->setCellValue('C'.$k,$apM);
          $rows->setCellValue('D'.$k,$matricula);
//        $rows->setCellValue('C'.$k,$row2['num_registro']);
//        $rows->setCellValue('D'.$k,status($row2['aceptado_lista'],$row2['revisado_lista'],$row2['dictamen_cee']));
//        $rows->setCellValue('E'.$k,$row2['envio_conf_dict']);
//        $rows->setCellValue('F'.$k,utf8_encode(strtoupper($row2['nombre'])));
//        $rows->setCellValue('G'.$k,edad($row2['curp']));
//        $rows->setCellValue('H'.$k,utf8_encode($row2['escolaridad']));
//        $rows->setCellValue('I'.$k,$row2['curp']);
//        $rows->setCellValue('J'.$k,utf8_encode($row2['email1']));
//        $rows->setCellValue('K'.$k,utf8_encode($row2['email2']));  
//        $rows->setCellValue('L'.$k,utf8_encode($row2['siglas']));
//        $rows->setCellValue('M'.$k,utf8_encode($row2['nombre_ies']));
//        $rows->setCellValue('N'.$k,utf8_encode($row2['generacion']));
//        $rows->setCellValue('O'.$k,utf8_encode($row2['subsistema']));
//        $rows->setCellValue('P'.$k,utf8_encode($row2['folio_sems']));
//        $rows->setCellValue('Q'.$k,utf8_encode($row2['institucion']));
//        $rows->setCellValue('R'.$k,utf8_encode($row2['nombre_entidad']));
//        $rows->setCellValue('S'.$k,utf8_encode($row2['nombre_localidad']));
       
//         $rows->setCellValue('T'.$k,utf8_encode($row2['programa']));
//        $rows->setCellValue('U'.$k,utf8_encode($row2['tipo_programa']));
//         $rows->setCellValue('V'.$k,utf8_encode($row2['nombre_tipo_trabajo']));

//          $rows->setCellValue('W'.$k,utf8_encode($row2['nombre_trabajo']));
//         // $rows->setCellValue('W'.$k,utf8_encode($row2['nombre_trabajo']));

//         $row_evaluacion=$result_evaluacion->fetch_array(MYSQLI_BOTH);


//           $rows->setCellValue('X'.$k,utf8_encode($row_evaluacion['nombre_eval']." ".$row_evaluacion['apellidos_eval']));
//            $rows->setCellValue('Y'.$k,$row_evaluacion['nucleo1']);
//          $rows->setCellValue('Z'.$k,$row_evaluacion['nucleo2']);
//          $rows->setCellValue('AA'.$k,utf8_decode($row_evaluacion['nucleo3']));
//           $rows->setCellValue('AB'.$k,utf8_encode(statusREV($row2['dictamen_cee'])));



// $k++;
// }


 $objPHPExcel->getActiveSheet()->setTitle('ods');
 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 header('Content-Type: text/html; charset=UTF-8');
 header('Content-Disposition: attachment;filename="reporte_Ods.xlsx"');
 header('Cache-Control: max-age=0');
 $objPHPExcel->setActiveSheetIndex(0);
 $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
 $objWriter->save('php://output');
 exit();




?>