<section class="confirms" id="confirms">
    <div class="wow title" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <?= $this->Html->image("icons/our-love-life.png", ["class" => "img-responsive pull-center"]) ?>
        <h2>Confirmar presença</h2>
    </div>
    <div class="row bg-circles">
        <div class="container">
            <?= $this->Form->create(null, ["id" => "confirm_form", "url" => ['controller' => 'Confirms', 'action' => 'add']]) ?>
            <?php
                echo $this->Form->checkbox('confirm', [
                    'id' => 'checkbox_confirm',
                    'label' => false,
                    'class' => 'hidden',
                    'checked' => true
                ]);
            ?>
            <div class="form-group col-xs-6">
                <?php
                    echo $this->Form->input('name', [
                        'required' => true,
                        'label' => false,
                        'placeholder' => '* Nome',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="form-group col-xs-6">
                <?php
                    echo $this->Form->input('quantidy', [
                        'type' => 'number',
                        'min' => 1,
                        'required' => true,
                        'label' => false,
                        'placeholder' => '* Número de convidados que deseja confirmar',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="form-group col-xs-6">
                <?php
                    echo $this->Form->input('email', [
                        'type' => 'email',
                        'label' => false,
                        'placeholder' => 'Email',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="form-group col-xs-6">
                <?php
                    echo $this->Form->input('phone', [
                        'type' => 'text',
                        'label' => false,
                        'placeholder' => 'Telefone',
                        'class' => 'form-control phone'
                    ]);
                ?>
            </div>
            <div class="form-group col-xs-12">
                <?php
                    echo $this->Form->input('message', [
                        'type' => 'textarea',
                        'label' => false,
                        'placeholder' => 'Aproveite para deixar uma mensagem aos noivos.',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="col-xs-12">
                <?= $this->Form->button(__('Confirmar presença'), ['id' => 'confirm', 'class' => 'btn btn-success col-xs-4 col-md-offset-1']) ?>
                <?= $this->Form->button(__('Não poderei ir'), ['id' => 'ausent', 'class' => 'btn btn-danger col-xs-4 col-md-offset-2']) ?>
            </div>
            <div class="col-xs-12 hidden" id="box-confirm" onclick="this.classList.add('hidden')">
                <div id="box-text" style="display: inline;"></div>
                <button type="button" class="close" aria-label="Close" style="display: inline;"><span aria-hidden="true">&times;</span></button>
            </div>
            <?= $this->Form->end() ?>
            
        </div>
    </div>
</section>

<script type="text/javascript">
    // Se for clicado que não poderá ir, envia campo confirm como false
    $('#ausent').click(function(){
        $('#checkbox_confirm').prop( "checked", false );
    });
    // Se for clicado para confirmar, envia campo confirm como true
    $('#confirm').click(function(){
        $('#checkbox_confirm').prop( "checked", true );
    });
    
    // Ao clicar no botão confirmar presença
    $('#confirm_form').submit(function(event){
        $.ajax({
            url: "confirms/add",
            method: "POST",
            data: $('#confirm_form').serialize(),
            success: function(data){
                $('#confirm_form')[0].reset();
                $('#box-confirm').removeClass('bg-danger hidden');
                $('#box-confirm').addClass('bg-success');
                $('#box-confirm #box-text').html(data);
			},
			error: function(data){
                $('#box-confirm').removeClass('bg-success hidden');
                $('#box-confirm').addClass('bg-danger');
                $('#box-confirm #box-text').html(data);  
			}
        });
        
        return false;
    });
</script>
