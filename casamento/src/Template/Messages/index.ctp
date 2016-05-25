<?php if(count($messages) > 0): ?>
    <section class="list_message" id="list_message">
        <div class="row">
            <div class="container">
                <?php foreach ($messages as $message): ?>
                    <blockquote>
                        <?= h($message->message) ?>" 
                        <cite>
                            <?= h($message->name) ?>
                        </cite>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </blockquote>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
