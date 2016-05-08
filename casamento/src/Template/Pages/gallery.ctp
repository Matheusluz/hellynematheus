<section class="gallery" id="gallery">
    <div class="wow title" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <?= $this->Html->image("icons/phone-gallery-section-icon.png", ["class" => "img-responsive pull-center"]) ?>
        <h2>Galeria</h2>
    </div>
    <div class="row bg-circles">
        <div class="container-fluid">
            <div class="grid">
                <div class="grid-sizer col-xs-3"></div>
                <?php
                    $files = glob('img/gallery/*.{jpg,png,gif}', GLOB_BRACE);
                    foreach($files as $file) {
                    ?>
                        <div class="grid-item col-xs-3">
                            <div class="grid-item-content">
                                <a class="thumbnail fancybox-thumb" rel="fancybox-thumb" href="<?= $file ?>">
                                    <img src="<?= $file ?>" alt="" />
                                </a>
                            </div>
                        </div>
                    
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>