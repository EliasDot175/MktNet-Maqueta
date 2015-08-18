<?php include 'layout.php' ?>

<?php startblock('contenido') ?>
		
	<!--detalle productos-->
	<div class="historial-productos col-xs-12 col-sm-12 col-md-12 ol-lg-12">

		<!--head-page-->
		<div class="head-page col-xs-12 col-sm-12 col-md-12 ol-lg-12">
			
		</div>
		<!--end / head-page-->


		<!--acordeon historial-->
		<div class="acordeon-general panel-group" id="accordion">

			<!-- head tabla-detalle -->
			<table class="tabla-detalle">

				<thead>
					<tr>
						<th class="text-uppercase col-A">canje</th>
						<th class="text-uppercase">productos</th>
						<th class="text-uppercase">talle</th>
						<th class="text-uppercase">color</th>
						<th class="text-uppercase">unidades</th>
						<th class="text-uppercase">puntos</th>
						<th class="text-uppercase">remito</th>
						<th class="text-uppercase">estado</th>
					</tr>
				</thead>

			</table>
			<!--end /  head tabla-detalle -->

			<?php 
				$cantItems = 6;

				for ($i=0; $i < $cantItems ; $i++) { 
			 ?>

			<!--ITEM accordeon-->
			<div class="item"><!--class panel para que cierre automáticamente-->
				<!--head accordeon-->
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
					<div class="panel-heading">
						<h4>
							2015/03/20 10:38:40
						</h4>
					</div>
				</a>
				<!--end / head accordeon-->

				<!--body accordeon-->
				<div id="collapse<?php echo $i;?>" class="panel-collapse collapse <?php if($i == 0){echo 'in';}; //accordeon abierto ?> ">
					<div class="panel-body">
						<!-- tabla-detalle -->
						<table class="tabla-detalle">

							<tbody>

								<tr>
									<td class="col-A">
										<div class="puntos">
											<p class="num">450</p>
											<span class="text-uppercase">puntos</span>
										</div>
										<div class="producto">
											<img src="assets/images/producto.png" alt="">
										</div>
									</td>
									<td class="col-Auto">
										<p>camisa escosesa</p>
									</td>
									<td class="col-B">
										<!-- SI NO HAY TALLE
											<p class="text-uppercase inactivo">n/a</p>
										-->
										<!-- color-->
										<p class="text-uppercase big-text">m</p>
									</td>
									<td class="col-C">
										<!-- SI NO HAY COLOR
											<p class="text-uppercase inactivo">n/a</p>
										-->
										<!-- color-->
										<div class="color">
											<span class="icon-color  color-verde "></span>
											<p class=" text-uppercase">verde </p>
										</div>
										
										<!-- end / color-->
									</td>
									<td class="col-B">
										<p class="text-uppercase big-text ">15</p>
									</td>
									<td class="col-B">
										<p class="text-uppercase big-text ">450</p>
									</td>
									<td>
										<p>pendiente</p>
									</td>
									<td>
										<p>Nº 04517</p>
									</td>
								</tr>
							</tbody>
						</table>
						<!--end /  tabla-detalle -->
	        				</div>
				</div>
				<!--end / body accordeon-->
	    		</div>
			<!--end / ITEM accordeon-->

			<?php 
				}
			?>

	    		



		<!-- talles -->
		

	</div>
	<!--end / historial productos-->


<?php endblock() ?>