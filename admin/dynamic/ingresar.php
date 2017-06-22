<!DOCTYPE html>
<html>
<head>
	<title>Salex</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/ipn.jpg">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
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
                <a class="navbar-brand" href="../index.php">Salex</a>
            </div>
           
           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../dynamic/registro.php"><i class="fa fa-fw fa-dashboard"></i> Registro</a>
                    </li>
                    
                   
                    
                </ul>
            </div>
           
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12"><br><br><br>
                        <h2 align="center" class="page-header">Ingreso</h2>
                        <div class="container">
				  <h2>Ingresar Datos</h2><br><br>
				  <form class="form-horizontal" action="../valida.php" method="post">
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="boleta">Boleta:</label>
				      <div class="col-sm-10">
				        <input type="text" class="form-control" id="boleta" placeholder="Ingresar Boleta 10 dígitos" name="boleta" required="required" title="Boleta no válida" pattern="^[0|1|2|3|4|5|6|7|8|9]\d{9}$">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
				      <div class="col-sm-10">          
				        <input type="password" class="form-control" id="pwd" placeholder="Ingresar Contraseña" name="pwd" required="required">
				      </div>
				    </div>
				    
				    <div class="form-group">        
				      <div class="col-sm-offset-2 col-sm-10">
				        <button type="submit" class="btn btn-default">Enviar</button>
				      </div>
				    </div>
				  </form>
				</div>

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