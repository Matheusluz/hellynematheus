<section class="gallery" id="gallery">
    <div class="wow title" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <?= $this->Html->image("icons/phone-gallery-section-icon.png", ["class" => "img-responsive pull-center"]) ?>
        <h2>Galeria</h2>
    </div>
    <div class="row bg-circles">
        <div class="container-fluid">
            <div class="grid">
                <div class="grid-sizer col-xs-3"></div>
                    <!-- items use Bootstrap .col- classes -->
                <div class="grid-item col-xs-3">
                    <!-- wrap item content in its own element -->
                    <div class="grid-item-content">
                        <?= $this->Html->link($this->Html->image("gallery/2.jpg", ['class' => 'class_img']), "/img/gallery/2.jpg", ['escapeTitle' => false, 'title' => "/img/gallery/2.jpg", 'data-lightbox'=> 'roadtrip', 'class' => 'class_url']) ?>
                    </div>
                </div>
                <div class="grid-item col-xs-4">
                    <div class="grid-item-content">
                        
                    <?= $this->Html->link($this->Html->image("gallery/3.jpg", ['class' => 'class_img']), "/img/gallery/3.jpg", ['escapeTitle' => false, 'title' => "/img/gallery/3.jpg", 'data-lightbox'=> 'roadtrip', 'class' => 'class_url']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>