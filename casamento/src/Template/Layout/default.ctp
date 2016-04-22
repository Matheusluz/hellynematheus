<?php $cakeDescription = 'Hellyn e Matheus'; ?>
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
    
        <?= $this->Html->css(['bootstrap', 'font-awesome', 'animate', 'theme']) ?>
        <?= $this->Html->css('http://fonts.googleapis.com/css?family=Montserrat:400,700') ?>
        <?= $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') ?>
        <?= $this->Html->css('http://fonts.googleapis.com/css?family=Playball') ?>
        
        <?= $this->Html->script(['jquery-1.12.3.min']) ?>
    
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        
<!--wrapper start-->
<div class="wrapper" id="wrapper">
    <?= $this->Flash->render() ?>
    		    <?= $this->fetch('content') ?>
        		    <?= $this->Html->link('Hellyn & Matheus', '/pages/home') ?>
        				<?= $this->Html->link('Lista de presentes', '/pages/home') ?>
        				<?= $this->Html->link('Galeria', '/pages/gallery') ?>
        				<?= $this->Html->link('Confirmar presença', '/pages/contact') ?>
    
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
    </nav>
	
	<!--header-->
	<header>
    	<div class="menu">
    		<div class="navbar-wrapper">
    			<div class="container">
    				<div class="navwrapper">
    					<div class="navbar navbar-inverse navbar-static-top">
    						<div class="container">
    							<div class="navArea">
    								<div class="navbar-collapse collapse">
    									<ul class="nav navbar-nav">
    										<li class="menuItem active"><a href="#wrapper">Home</a></li>
    										<li class="menuItem"><a href="#aboutus">About Us</a></li>
    										<li class="menuItem"><a href="#specialties">Specialties</a></li>
    										<li class="menuItem"><a href="#gallery">Events Gallery</a></li>
    										<li class="menuItem"><a href="#feedback">Feedback</a></li>
    										<li class="menuItem"><a href="#contact">Hire Us</a></li>
    									</ul>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>	
	</header>




</div>	


        
    	
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
    </body>
</html>
