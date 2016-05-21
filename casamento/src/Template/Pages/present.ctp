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
                    echo $this->Html->image("lua_de_mel2.jpg", ['id' => 'honeyMonGifts', 'title' => 'Ajude os noivos a ter uma lua de mel', "data-toggle" => "tooltip", 'class' => ['img-responsive', 'img-thumbnail']]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="honeyMonModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Se preferir, faça um depósito para nossa poupança no banco do Brasil</h4>
      </div>
      <div class="modal-body">
        <p>Nome: Matheus Pereira Luz</p>
        <p>CPF: 056.760.549-30</p>
        <p>Agência: 756-0</p>
        <p>Conta corrente: 72344-4</p>
        <p>Variação: 51</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $("#honeyMonGifts").click(function(){
       $('#honeyMonModal').modal(); 
    });
</script>