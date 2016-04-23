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

    <?= $this->Html->script(['jquery', 'bootstrap.min', 'parallax', 'wow', 'common']) ?>

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
                            <?= $this->Html->link('Hellyn & Matheus', '/pages/home', ['class' => 'navbar-brand']) ?>
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
                
        <div class="footer">
            <div class="wrap">
                <div class="footer-left">
                    <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
                </div>
                <div class="footer-right">
                    <ul>
                        <li><a href="#">Our Loocations</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Personal info</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Our Loocations</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Personal info</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="clear"> </div>
        <div class="top-link">
            <a href="#top" class="scroll"> </a>
        </div>
    </div>
    <script type="text/javascript">
        // Marca no menu, a página que esta aberta
        $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
    </script>
</body>

</html>
