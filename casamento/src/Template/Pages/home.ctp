<div class="banner row" id="banner">		
	<div class="parallax text-center" style="background-image: url(http://wowthemes.net/demo/leroy/img/dummy1.jpg);">
		<div class="parallax-pattern-overlay">
			<div class="container text-center" style="height:580px;padding-top:170px;">
				<a href="#"><img id="site-title" class=" wow fadeInDown" wow-data-delay="0.0s" wow-data-duration="0.9s" src="img/logo.png" alt="logo"/></a>
				<h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">Catering & Special Events</h2>
			</div>
		</div>
	</div>
</div>

<div class="image-slider">
    <ul class="rslides" id="slider1">
        <li><?= $this->Html->image('slider2.jpg'); ?></li>
        <li><?= $this->Html->image('slider1.jpg'); ?></li>
    </ul>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/><div>dskfklasjflkasd</div>
</div>
<script>
    $(function () {
        $("#slider1").responsiveSlides({
            maxwidth: 1600,
            speed: 50
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
    	$(".scroll").click(function(event){		
    		event.preventDefault();
    		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
    	});
    });
</script>