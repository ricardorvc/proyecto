<?php include ('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>CLIENTE</h1>
			</div>

			<div class="articulo">
			<article> <center>
			<h1>Ingresa los datos:</h1>
				<table>
            <tr>
               <td>Nombre:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>Direccion:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
            <tr>
               <td>Numero Telefonico:</td>
               <td><input type = "text" name = "website"></td>
            </tr>
			</table>
			
			<table>
			<br><h1>Datos del vehiculo:</h1>
			<tr>
               <td>Modelo del vehiculo:</td>
               <td><input type = "text" name = "website"></td>
            </tr>

			<tr>
               <td>Matricula:</td>
               <td><input type = "text" name = "website"></td>
            </tr>

			<tr>
               <td>Fecha de ingreso al taller:</td>
               <td><input type = "text" name = "website"></td>
            </tr>

			<tr>
               <td>Fecha de salida asignada:</td>
               <td><input type = "text" name = "website"></td>
            </tr>

			<tr>
               <td>Detalles:</td>
               <td><textarea name = "comment" rows = "5" cols = "20"></textarea></td> 
            </tr>
            </table>
         <button>Enviar</button> <br> <br>
		 <center><img src="img/talle.jpeg" height="250px"></center>
		 </center></article>
			</div>

<?php include('sidebar.php');?>
		</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html> 