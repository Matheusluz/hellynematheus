<?php if(count($messages) > 0): ?>
    <section class="list_message" id="list_message">
        <div class="row">
            <div class="container">
                <?php foreach ($messages as $message): ?>
                    <blockquote>
                        <cite>
                            <?= h($message->name) ?>
                        </cite>
                        <?php 
                            if(h($message->confirmed) == 1) {
                                echo $this->Form->checkbox('confirmed', ["checked" => true, "class" => "check_confirmed", "value" => h($message->id)]);
                            } else {
                                echo $this->Form->checkbox('confirmed', ["checked" => false, "class" => "check_confirmed", "value" => h($message->id)]);
                            }
                        ?>
                        <br/>
                        <?= h($message->message) ?>" 
                        <!--<div class="onoffswitch">-->
                        <!--    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="teste">-->
                        <!--    <label class="onoffswitch-label" for="myonoffswitch">-->
                        <!--        <span class="onoffswitch-inner"></span>-->
                        <!--        <span class="onoffswitch-switch"></span>-->
                        <!--    </label>-->
                        <!--</div>-->
                    </blockquote>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<script type="text/javascript">
    $('.check_confirmed').change(function(){
        $.ajax({
            url: "messages/confirm",
            method: "POST",
            data: {
                id: $(this).val(),
                confirmed: $(this)[0].checked
            }
        });
        
        return false;
    });
</script>
