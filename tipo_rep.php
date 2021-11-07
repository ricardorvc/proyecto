<?php include ('header.php');?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>REPUESTOS</h1>
			</div>
			<div class="contenedor">

			<div class="articulo"> <center>
				<article>
				<div class="form">
				<form action="/action_page.php">
         <table>
		 <h1>Llena el siguiente formulario para encontrar la pieza o acude a tu sucursal mas cercana:</h1>
               <td>Selecciona la <br> marca de tu automovil:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">Nissan</option>
                     <option value = "Java">Volkswagen</option>
                     <option value = "C#">Toyota</option>
                     <option value = "Data Base">KIA</option>
                     <option value = "Hadoop">Mazda</option>
                     <option value = "VB script">Honda</option>
                     <option value = "VB script">Ford</option> 
                  </select>
               </td>
            </tr>
            
            
            <tr>
               <td>Especifica que repuesto requieres:</td>
               <td><input type = "text" name = "website"></td> 
            </tr>
            
			<tr>
               <td>Selecciona el año de tu vehiculo:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">2010</option>
                     <option value = "Java">2011</option>
                     <option value = "C#">2012</option>
                     <option value = "Data Base">2013</option>
                     <option value = "Hadoop">2014</option>
                     <option value = "VB script">2015</option>
                     <option value = "VB script">2016</option>
                     <option value = "VB script">2017</option>
                     <option value = "VB script">2018</option>
                     <option value = "VB script">2019</option>
                     <option value = "VB script">2020</option>
                     <option value = "VB script">2021</option> 
                  </select>
               </td>
            </tr>
         
            
            <tr>
               <td>Detalles:</td>
               <td><textarea name = "comment" rows = "5" cols = "20"></textarea></td> 
            </tr>
         </table>
		 <button>enviar</button>
      </form>
	  <div class="form">
				</article>
			</div> </center>
			<img src="img/hola.jpg" height="150px" width="250px"> <br>
			<img src="img/hola1.jpg" height="150px" width="250px"> <br>
			<img src="img/hola2.jpg" height="150px" width="250px"> <br>
		</div>
	</section>
<?php include('footer.php'); ?>
</body>
</html> 