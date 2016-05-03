<section class="slider" id="slider">
    <div class="container-fluid">
        <div class="row">
			<!-- Start WOWSlider.com BODY section -->
			<div id="wowslider-container1">
			<div class="ws_images"><ul>
					<li><?= $this->Html->image("wowslider/images/1.jpg", ["alt" => "", "title" => "", "id" => "wows1_0"]) ?></li>
					<li><?= $this->Html->image("wowslider/images/4.jpg", ["alt" => "", "title" => "", "id" => "wows1_1"]) ?></li>
					<li><?= $this->Html->image("wowslider/images/6.jpg", ["alt" => "", "title" => "", "id" => "wows1_2"]) ?></li>
					<li><?= $this->Html->image("wowslider/images/14.jpg", ["alt" => "", "title" => "", "id" => "wows1_3"]) ?></li>
				</ul></div>
				<div class="ws_bullets"><div>
					<a href="#" title=""><span><?= $this->Html->image("wowslider/tooltips/1.jpg", ["alt" => ""]) ?>1</span></a>
					<a href="#" title=""><span><?= $this->Html->image("wowslider/tooltips/4.jpg", ["alt" => ""]) ?>2</span></a>
					<a href="#" title=""><span><?= $this->Html->image("wowslider/tooltips/6.jpg", ["alt" => ""]) ?>3</span></a>
					<a href="#" title=""><span><?= $this->Html->image("wowslider/tooltips/14.jpg", ["alt" => ""]) ?>4</span></a>
				</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery slideshow</a> by WOWSlider.com v8.7</div>
			<div class="ws_shadow"></div>
			</div>
			<?= $this->Html->script(['wowslider', 'wowslider-script']) ?>
			<!-- End WOWSlider.com BODY section -->
        </div>
    </div>
</section>