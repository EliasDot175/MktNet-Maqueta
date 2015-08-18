<?php include 'layout.php' ?>

<?php startblock('head') ?>
	<img src="assets/images/menu-1-verde.png" alt="">
	<div class="texto">
		<h3 class="text-a">CATALOGO</h3>
		<h3 class="text-b">DE PRODUCTOS</h3>
	</div>
<?php endblock() ?>

<?php startblock('contenido') ?>
		
	<!--detalle productos-->
	<div class="detalle-productos col-xs-12 col-sm-12 col-md-12 ol-lg-12">

		<!--buscador-->
		<div class="buscador col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<!--<input type="text" name="" value="" >-->
		</div>
		<!--end / buscador-->

		<!--col-a-->
		<div class="col-a block background-a col-xs-12 col-sm-4 col-md-4 ol-lg-4">
			<div class="img">
				<img src="assets/images/producto.png" alt="">
			</div>
		</div>
		<!--end / col-a-->


		<!--col-b-->
		<div class="col-b col-xs-12 col-sm-8 col-md-8 ol-lg-8">
			
			<div class=" block block-head background-a col-xs-12 col-sm-12 col-md-12 ol-lg-12">
				<div class="block-puntos">
					<p class="num">450</p>
					<p class="text text-uppercase">puntos</p>
				</div>
				<h3 class="text-uppercase sub-titulo">CAMISA ESCOSESA HOMBRE</h3>
				<p class="descripcion">Linterna de luz blanca led de alto brillo, resistente a los golpes. 3 modos. Linterna de luz blanca led de alto brillo, resistente a los golpes. 3 modos.</p>
			</div>

			<div class=" block background-b col-xs-12 col-sm-12 col-md-12 ol-lg-12">
				<!-- titulo general -->
				<h3 class="text-uppercase sub-titulo">PEDIDO</h3>
				<!--end / titulo general -->
				
				<!-- sub-titulo-->
				<h3 class="text-uppercase sub-titulo-B">
					<span>LÍMITES DE CANJE</span>
				</h3>
				<!-- end / sub-titulo-->

				<div class="block-num">
					<p class="text text-uppercase">MÁXIMO</p>
					<div class="icon-num">
						<p>10</p>
					</div>
				</div>
				<div class="block-num">
					<p class="text text-uppercase">MÍNIMO</p>
					<div class="icon-num">
						<p>30</p>
					</div>
				</div>
				
				<!-- sub-titulo color-->
				<h3 class="text-uppercase sub-titulo-B color">
					<span><div class="icon-color color-verde"></div>verde</span>
				</h3>
				<!-- end / sub-titulo color-->


				<!-- talles -->
				<table class="talles">
					<tbody>
						<tr>
							<td>
								<label  class="talle text-uppercase ">xs</label >
								<input type="text" name="" value="" >
								<span class="unidades">10 u</span>
							</td>
							<td>
								<label  class="talle text-uppercase ">s</label >
								<input type="text" name="" value="" >
								<span class="unidades">10 u</span>
							</td>
							<td>
								<label  class="talle text-uppercase ">m</label >
								<input type="text" name="" value="" >
								<span class="unidades">20 u</span>
							</td>
							<td class="inactivo">
								<label  class="talle text-uppercase">l</label >
								<input type="text" name="" value="" disabled>
								<span class="unidades">0 u</span>
							</td>
							<td>
								<label  class="talle text-uppercase ">xl</label >
								<input claSS="error" type="text" name="" value="20" >
								<span class="unidades">10 u</span>
							</td>
							<td class="inactivo">
								<label  class="talle text-uppercase">xxl</label >
								<input type="text" name="" value="" disabled>
								<span class="unidades">0 u</span>
							</td>
						</tr>
					</tbody>
				</table>
				<!--end /  talles -->



				<!-- sub-titulo color-->
				<h3 class="text-uppercase sub-titulo-B color">
					<span><div class="icon-color color-gris"></div>gris oscuro</span>
				</h3>
				<!-- end / sub-titulo color-->
		


				<!-- talles -->
				<table class="talles">
					<tbody>
						<tr>
							<td>
								<label  class="talle text-uppercase ">xs</label >
								<input type="text" name="" value="" >
								<span class="unidades">10 u</span>
							</td>
							<td>
								<label  class="talle text-uppercase ">s</label >
								<input type="text" name="" value="" >
								<span class="unidades">10 u</span>
							</td>
							<td>
								<label  class="talle text-uppercase ">m</label >
								<input type="text" name="" value="" >
								<span class="unidades">20 u</span>
							</td>
							<td class="inactivo">
								<label  class="talle text-uppercase">l</label >
								<input type="text" name="" value="" disabled>
								<span class="unidades">0 u</span>
							</td>
							<td>
								<label  class="talle text-uppercase ">xl</label >
								<input claSS="error" type="text" name="" value="20" >
								<span class="unidades">10 u</span>
							</td>
							<td class="inactivo">
								<label  class="talle text-uppercase">xxl</label >
								<input type="text" name="" value="" disabled>
								<span class="unidades">0 u</span>
							</td>
						</tr>
					</tbody>
				</table>
				<!--end /  talles -->


				<!-- talles-unico -->
				<table class="talles talles-unico" style="display:none">
					<tbody>
						<tr>
							<td>
								<input type="text" name="" value="" >
								<span class="unidades">10 u</span>
							</td>
						</tr>
					</tbody>
				</table>
				<!--end /  talles-unico -->


				<!-- mensaje error -->
				<div class='mensaje-error'>
					<img class="icon" src="assets/images/error-icon.png" alt="">
					<p class="text text-uppercase">CANTIDAD MÁXIMA DE CANJE EXCEDIDO</p>
				</div>
				<!--end /  mensaje error -->


				<!-- botones -->
				<div class='block-botones'>
					<button class="boton" type="">CANCELAR</button>
					<button class="boton inactivo" type="">AGREGAR</button>
				</div>
				<!--end /  botones -->
			
			</div>

		</div>
		<!--end / col-b-->

	</div>
	<!--end / detalle productos-->



<?php endblock() ?>