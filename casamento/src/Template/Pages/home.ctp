<div class="banner row" id="banner">		
	<div class="parallax text-center">
		<div class="parallax-pattern-overlay">
			<div class="container text-center">
				<?= $this->Html->image("logo.png", [
					"id" => "site-title",
					"class" => "wow fadeInDown",
					"wow-data-delay" => "0.0s",
					"wow-data-duration" => "0.9s",
				    'url' => ['controller' => 'Recipes', 'action' => 'view', 6]
				]) ?>
				<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Catering & Special Events</h2>
			</div>
		</div>
	</div>
</div>