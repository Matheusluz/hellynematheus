<section class="add_message" id="add_message">
    <div class="wow title" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <?= $this->Html->image("icons/message.png", ["class" => "img-responsive pull-center"]) ?>
        <h2>Deixe uma mensagem aos noivos</h2>
    </div>
    <div class="row bg-circles">
        <div class="container">
            <?= $this->Form->create(null, ["id" => "form_message", "url" => ['controller' => 'Messages', 'action' => 'add']]) ?>
            <div class="form-group col-xs-4">
                <?php
                    echo $this->Form->input('name', [
                        'required' => true,
                        'label' => false,
                        'placeholder' => '* Nome',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="form-group col-xs-4">
                <?php
                    echo $this->Form->input('email', [
                        'type' => 'email',
                        'label' => false,
                        'placeholder' => 'Email',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="form-group col-xs-4">
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
                        'required' => true,
                        'label' => false,
                        'placeholder' => 'Mensagem aos noivos.',
                        'class' => 'form-control'
                    ]);
                ?>
            </div>
            <div class="col-xs-12">
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success col-xs-3']) ?>
                <div class="col-xs-8 col-xs-offset-1 hidden" id="box-confirm" onclick="this.classList.add('hidden')">
                    <div id="box-text" style="display: inline;"></div>
                    <button type="button" class="close" aria-label="Close" style="display: inline;"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
            <?= $this->Form->end() ?>
            
        </div>
        
        <?= $this->cell('Messages'); ?>
    </div>
</section>


<script type="text/javascript">
    // Ao clicar no botão confirmar presença
    $('#form_message').submit(function(event){
        $.ajax({
            url: "messages/add",
            method: "POST",
            data: $('#form_message').serialize(),
            success: function(data){
                $('#form_message')[0].reset();
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
