<?php 
require('class/alumno.php');

    $idf=$_GET['id'];//Obtener el valor id
    $id=base64_decode($idf);
    $result=Alumno::Recover_id($id);
     foreach ($result as  $value) {
       $name= $value['nombre'];
       $materia=$value['materia'];
       $correo=$value['correoInst'];
       $activo=$value['activo'];
       $matricula=base64_encode($value['boleta']);    
     }


          // $matricula=base64_encode($id);         
          
?>
<!DOCTYPE html>
<html>
<head>
	<title>Salex</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../img/ipn.jpg">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Salex	</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Salex</a>
            </div>
           
           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Salir</a>
                    </li>
                    
                   
                    
                </ul>
            </div>
           
        </nav>



        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12"><br><br><br>
                        <button style="float: left;" type="button" class="btn btn-primary page-header" data-toggle="modal" data-target="#exampleModalLong">
                        Formulario
                        </button>
                        <a href="edita.php?id=<?php echo $matricula?>"> <button style="float: right;" class="btn btn-primary page-header">Modificar Contraseña</button></a>
                        <h2 align="center" class="page-header">Bienvenido: <?php echo $name;?> </h2>

                        <div class="container">
				  <h2>Datos Personales : </h2><br><br>
                   <div align="center">
                   <table class="table">   
                            <tr class="info">
                            <th>Correo</th>
                            <th>Materia</th> 
                            <th>Activo</th>  
                            </tr>
                          <tr>
                              <td><?php echo $correo?></td>
                              <td><?php echo $materia?></td>
                              <td><?php echo $activo?></td>
                          </tr>
                                                  
                    </table>      

                 </div>


				</div>

            <div class="container">
            <h2>Kardex : </h2><br><br>
                   <div align="center">
                   <table class="table">   
                            <tr class="success">
                            <th>Nombre</th>
                            <th>Materia</th> 
                            <th>Activo</th>  
                            </tr>

                            <tr>
                              <td><?php echo $name?></td>
                              <td><?php echo $materia?></td>
                              <td><?php echo $activo?></td>
                          </tr>

                   </table>
                  </div>
        </div>


            <div class="container">
            <h2>Horario : </h2><br><br>
                   <div align="center">
                   <table class="table">   
                            <tr class="warning">
                            <th>Dia</th>
                            <th>Inicio</th> 
                            <th>Termina</th>  
                            </tr>

                            <tr>
                              <td>Sabado</td>
                              <td>8:00 am</td>
                              <td>13:30 pm</td>
                          </tr>

                   </table>
                  </div>
</div>

           <div class="container">
            <h2>Calificaciones : </h2><br><br>
                   <div align="center">
                   <table class="table">   
                            <tr class="danger">
                            <th>Basico</th>
                            <th>Intermedio</th> 
                            <th>Avanzado</th>  
                            </tr>

                            <tr>
                              <td>No hay por el momento</td>
                              <td>No hay por el momento</td>
                              <td>No hay por el momento</td>
                          </tr>

                   </table>
                  </div>
</div>
               </div>
            </div>

 			</div>
 		</div>



<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 align="center" class="modal-title" id="exampleModalLongTitle">Formulario</h5>
          <span aria-hidden="true">&times;</span>
        
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="genera_excel.php" method="post">
        <form class="form-horizontal" action="guarda.php" method="post">
            <div class="form-group">
               <label class="control-label col-sm-2" for="nombre">Nombre:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control"  name="nombre" placeholder="Nombre(s)" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="apP">Apellido Paterno:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="apP" placeholder="Apellido Paterno" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="apM">Apellido Materno:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="apM" placeholder="Apellido Materno" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="boleta">Boleta:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="boleta" pattern="^[0|1|2|3|4|5|6|7|8|9]\d{9}$"  placeholder="10 dígitos" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="nivel">Nivel:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="nivel" placeholder="Nivel" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="carrera">Carrera:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="carrera" placeholder="Carrera Actual" required/>
              </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="califcacion">Calificacion:</label>
               <div class="col-sm-10">
                <input type="text" class="form-control" name="califcacion" pattern="^[0|1|2|3|4|5|6|7|8|9]\d{0}$"  required/>
              </div>
            </div>
            <center><input type="submit" name="" value="Guardar" class="btn btn-primary"></center>

        </form>
      

      </div>
      
    </div>
  </div>
</div>  
 
    <br><br><br><br>
    <footer class="footer">
      <div class="container" style="background-color: #800040;">
    	<a href="http://www.ipn.mx/Paginas/inicio.aspx" target="_blank"><p style="color: white" align="center">	INSTITUTO POLITÉCNICO 	NACIONAL</p></a>

		<p style="color: white" align="center" >D.R. Instituto Politécnico Nacional (IPN), Av. Luis Enrique Erro S/N, Unidad Profesional Adolfo López Mateos, Zacatenco, Delegación Gustavo A. Madero, C.P. 07738, Ciudad de México; México 2009-2013.

		Esta página es una obra intelectual protegida por la Ley Federal del Derecho de Autor, puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica; su uso para otros fines, requiere autorización previa y por escrito del responsable de la pagina.
		</p>
	</div>
   </footer>


</body>
</html>