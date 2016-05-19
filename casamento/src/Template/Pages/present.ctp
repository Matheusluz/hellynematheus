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
                        $this->Html->image("havan.jpg", ['title' => 'Nossa lista de presentes na havan', "data-toggle" => "tooltip", 'class' => ['img-responsive', 'img-thumbnail']]),
                        'http://lista.havan.com.br/Convidado/ItensLista/1/4275231',
                        ['escapeTitle' => false, 'target' => '_blank']
                    );
                    ?>
                </div>
                <div class="img col-xs-4">
                    <?php
                    echo $this->Html->link(
                        $this->Html->image("ponto_frio.jpg", ['title' => 'Nossa lista de presentes na ponto frio', "data-toggle" => "tooltip", 'class' => ['img-responsive', 'img-thumbnail']]),
                        'http://www.pontofrio.com.br/Site/ListaGerenciadaLandingPage.aspx?idListaCompra=541343',
                        ['escapeTitle' => false, 'target' => '_blank']
                    );
                    ?>
                </div>
                <div class="img col-xs-4">
                    <?php
                    echo $this->Html->link(
                        $this->Html->image("lua_de_mel2.jpg", ['title' => 'Ajude os noivos a ter uma lua de mel', "data-toggle" => "tooltip", 'class' => ['img-responsive', 'img-thumbnail']]),
                        '#',
                        ['escapeTitle' => false, 'target' => '_blank']
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>