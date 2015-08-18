<?php include 'layout.php' ?>

<?php startblock('contenido') ?>

	<!--lista productos-->
	<div class="lista-productos col-xs-12 col-sm-12 col-md-12 ol-lg-12">

		<?php 
			for ($i=0; $i < 12 ; $i++) { 
		 ?>
		 	<!--item-->
			<div class="item col-xs-12 col-sm-3 col-md-3 ol-lg-3">
				<div class="mask">
					<p class="text-uppercase text-a">canjear</p>
					<p class="text-uppercase text-b">producto</p>
				</div>  
				<div class="img">
					<img src="assets/images/producto.png" alt="">
				</div>
				<h6 class="text-uppercase">CAMISA ESCOSESA HOMBRE</h6>
				<p class="descripcion">Linterna de luz blanca led de alto brillo, resistente a los golpes. 3 modos.</p>
				<div class="footer-item">
					<p class="text-left">STOCK 25U</p>

					<div class="block-puntos">
						<p class="num">450</p>
						<p class="text text-uppercase">puntos</p>
					</div>
				</div>
			</div>
			<!--end / item-->

		<?php 
			}
		?>

	</div>
	<!--end / lista productos-->


<?php endblock() ?>