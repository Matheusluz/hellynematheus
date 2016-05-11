<section class="confirms" id="confirms">
    <div class="wow title" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <?= $this->Html->image("icons/our-love-life.png", ["class" => "img-responsive pull-center"]) ?>
        <h2>Confirmar presença</h2>
    </div>
    <div class="row bg-circles">
        <div class="container">
            <?= $this->Form->create(null,  ['url' => ['controller' => 'Confirms', 'action' => 'add']]) ?>
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
                        'placeholder' => '* N° de convidados que deseja confirmar',
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
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-default']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</section>
