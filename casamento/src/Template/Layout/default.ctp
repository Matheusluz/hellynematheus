<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Hellyn e Matheus';
?>
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

    <?= $this->Html->css(['responsiveslides', 'lightbox', 'style']) ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Cookie') ?>
    
    <?= $this->Html->script(['jquery-1.12.3.min', 'jquery.lightbox', 'responsiveslides.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!---start-header---->
	<div class="header" id="top">
		<div class="wrap">
		<!---start-logo---->
		<div class="logo">
		    <?= $this->Html->link('Hellyn & Matheus', '/pages/home') ?>
		</div>
		<!---End-logo---->
		<!---start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><?= $this->Html->link('Lista de presentes', '/pages/home') ?></li>
				<li><?= $this->Html->link('Galeria', '/pages/gallery') ?></li>
				<li><?= $this->Html->link('Confirmar presença', '/pages/contact') ?></li>
			</ul>
		</div>
		<div class="clear"> </div>
		<!---End-top-nav---->
	</div>
	<!---End-header---->
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
