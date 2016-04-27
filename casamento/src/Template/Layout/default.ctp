<?php $cakeDescription='Hellyn e Matheus' ; ?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap', 'font-awesome', 'responsiveslides', 'animate', 'theme']) ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Cookie') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat:400,700') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Playball') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Great+Vibes') ?>

    <?= $this->Html->script(['jquery-2.2.3.min', 'bootstrap.min', 'parallax', 'wow', 'common', 'jquery.countdown.min', 'jquery.firefly-0.5-min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div class="wrapper" id="wrapper">
        <header>
            <div class="menu">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <?= $this->Html->link('Hellyn & Matheus', '/', ['class' => 'navbar-brand']) ?>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><?= $this->Html->link('Galeria', '/pages/gallery') ?></li>
                                <li><?= $this->Html->link('Lista de presentes', '/pages/presents') ?></li>
                                <li><?= $this->Html->link('Confirmar presença', '/messages') ?></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        
        <section class="footer" id="footer">
    	<p class="text-center">
    		<a href="#wrapper" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
    	</p>
    	<div class="container clock"></div>
    	</section>
        
    </div>
    <script type="text/javascript">
        // Marca no menu, a página que esta aberta
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
        
        $('.footer .clock').countdown('2016/07/23 17:00:00', function(event) {
    		$(this).html(event.strftime('%-D Dia%!D %-H Hora%!H %-M Minuto%!M %-S Segundo%!S'));
    	});
    </script>
</body>

</html>
