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
                    </blockquote>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
