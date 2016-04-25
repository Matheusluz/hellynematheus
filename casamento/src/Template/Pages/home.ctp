<div class="banner row" id="banner">		
	<div class="parallax text-center">
		<div class="parallax-pattern-overlay">
			<div class="texts container-fluid">
				<div class="row">
					<div class="col-md-6 col-md-offset-6">
						<?= $this->Html->image("monograma_branco.png", [
							"id" => "monogram",
							"class" => "wow pulse",
							"data-wow-delay" => "0.0s",
							"data-wow-duration" => "0.9s",
							"data-wow-iteration" => "2"
						]) ?>
						<div class="intro wow zoomIn clock" data-wow-delay="1s" data-wow-duration="0.9s"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>dfasdfasd

<script type="text/javascript">
	// $('.clock').countdown('2016/07/23 17:00:00', function(event) {
	// 	$(this).html(event.strftime('%-D dia%!D %H:%M:%S'));
	// });
	
	$('.clock').countdown('2016/07/23 17:00:00').on('update.countdown', function(event) {
    var $this = $(this).html(event.strftime(''
    	+ '<div class="container-fluid countdown">'
			+ '<div class="row"> '
				+ '<div class="col-sm-2 col-sm-offset-2">Dia%!D</div>'
				+ '<div class="col-sm-2">Hora%!H</div>'
				+ '<div class="col-sm-2">Minuto%!M</div>'
				+ '<div class="col-sm-2">Segundo%!S</div>'
			+ '</div>'
			+ '<div class="row"> '
				+ '<div class="col-sm-2 col-sm-offset-2">%-D</div>'
				+ '<div class="col-sm-2">%H</div>'
				+ '<div class="col-sm-2">%M</div>'
				+ '<div class="col-sm-2">%S</div>'
			+ '</div>'
		+ '</div>'
	));
	});
</script>