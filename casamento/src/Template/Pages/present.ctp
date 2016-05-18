<section class="present" id="present">
    <div class="container">
        <div class="wow title" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <?= $this->Html->image("icons/couple-parents-icon.png", ["class" => "img-responsive pull-center"]) ?>
            <h2>Lista de presentes</h2>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="img col-xs-4">
                    <?php
                    echo $this->Html->link(
                        $this->Html->image("havan.jpg", ['alt' => 'Havan', 'class' => ['img-responsive', 'img-thumbnail']]),
                        'http://lista.havan.com.br/Convidado/ItensLista/1/4275231',
                        ['escapeTitle' => false, 'title' => 'Nossa lista de presentes na havan', 'target' => '_blank']
                    );
                    ?>
                </div>
                <div class="img col-xs-4">
                    <?php
                    echo $this->Html->link(
                        $this->Html->image("pontofrio.png", ['alt' => 'Ponto frio', 'class' => ['img-responsive', 'img-thumbnail']]),
                        'http://www.pontofrio.com.br/Site/ListaGerenciadaLandingPage.aspx?idListaCompra=541343',
                        ['escapeTitle' => false, 'title' => 'Nossa lista de presentes na ponto frio', 'target' => '_blank']
                    );
                    ?>
                </div>
                <div class="img col-xs-4"><?= $this->Html->image("havan.jpg", ['class' => ['img-responsive', 'img-thumbnail']]) ?></div>
            </div>
        </div>
    </div>
</section>