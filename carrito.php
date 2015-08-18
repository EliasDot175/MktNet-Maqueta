<?php include 'layout.php' ?>

<?php startblock('head') ?>
	<img src="assets/images/carrito-title.png" alt="">
	<div class="texto-carrito">
		<h3 class="text-a">CARRITO</h3>
		<h3 class="text-b">CONFIRMAR CANJES</h3>
	</div>
<?php endblock() ?>

<?php startblock('contenido') ?>

	<!--detalle productos-->
	<div class="carrito-productos col-xs-12 col-sm-12 col-md-12 ol-lg-12">

		<!--head-page-->
		<div class="head-page col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			<h3>10 productos agregados</h3>
		</div>
		<!--end / head-page-->
		
		<!-- tabla-detalle -->
		<table class="tabla-detalle col-xs-12 col-sm-12 col-md-12 ol-lg-12">

			<thead >
				<tr>
					<th class="col-D text-uppercase">productos</th>
					<th class="col-B text-uppercase">talle</th>
					<th class="col-C text-uppercase">color</th>
					<th class="col-B text-uppercase">unidades</th>
					<th class="col-B text-uppercase">puntos</th>
					<th class="col-A text-uppercase"></th>
					<th class="col-Total text-uppercase">total</th>
				</tr>
			</thead>


			<tbody>

			<?php 
				$cantItems = 6;
				for ($i=0; $i < $cantItems ; $i++) { 
			 ?>

			 	<!--*********** ITEM *********-->
				<tr class="item">
					<!-- nombre-->
					<td class="col-D">
						<div class="producto">
							<img src="assets/images/producto.png" alt="">
						</div>
						<p class="text text-uppercase">camisa escosesa </p>
					</td>
					<!--  end / nombre-->

					<!-- talle-->
					<td class="col-B">
						<!-- SI NO HAY TALLE-->
						<!-- <p class="text-uppercase inactivo">n/a</p>-->
						<p class="text-uppercase big-text">m</p>
					</td>
					<!--  end / talle-->

					<!-- color-->
					<td class="col-C">
						<!-- SI NO HAY COLOR-->
						<!-- <p class="text-uppercase inactivo">n/a</p>-->
						<div class="color">
							<span class="icon-color  color-verde "></span>
							<p class=" text-uppercase">verde </p>
						</div>
					</td>
					<!-- end / color-->

					<!-- unidades-->
					<td class="col-B">
						<p class="text-uppercase big-text ">15</p>
					</td>
					<!--  end / unidades-->

					<!-- puntos-->
					<td class="col-B">
						<p class="text-uppercase big-text ">450</p>
					</td>
					<!--  end / puntos-->

					<!-- quitar-->
					<td class="quitar col-A">
						<p class="text-uppercase">
							quitar
							<img class="cerrar" src="assets/images/cerrar.png" alt="">
						</p>
					</td>
					<!--  end / quitar-->

					<!--total puntos(columna no se repite -> rowspan = cantidad de items) -->
					<?php   if($i == 0){  ?>
					<td class="total col-Total" rowspan="<?php echo $cantItems ?>">
						<div class="block-num">
							<p class="num ">3.700</p>
						</div>
					</td>
					<?php  }   ?>
					<!--end / total puntos-->

				</tr>
				<!--***********END /  ITEM *********-->

			<?php   }   ?>
				
			</tbody>

		</table>
		<!--end /  tabla-detalle -->


		<!-- footer carrito -->
		<div class="footer-carrito col-xs-12 col-sm-12 col-md-12 ol-lg-12">

			<!-- botones -->
			<div class="col-xs-12 col-sm-9 col-md-9 ol-lg-9">
				<div class='block-botones'>
					<button class="boton inactivo" type="">AGREGAR MAS PRODUCTOS</button>
				</div>
			</div>
			<!--end /  botones -->
			<!-- botones -->
			<div class="col-xs-12 col-sm-3 col-md-3 ol-lg-3">
				<div class='block-botones'>
					<button class="boton " type="">CONFIRMAR</button>
				</div>
			</div>
			<!--end /  botones -->
		</div>
		<!-- end / footer carrito -->


	</div>
	<!--end / historial productos-->


<?php endblock() ?>