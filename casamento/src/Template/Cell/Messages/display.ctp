<?php if(count($messages) > 0): ?>
    <section class="list_message" id="list_message">
        <div class="row">
            <div class="container highlight pre-scrollable">
                <?php foreach ($messages as $message): ?>
                    <blockquote>
                        <?= h($message->message) ?>" 
                        <div>
                            <cite> <?= h($message->name) ?> </cite>
                            <date> 
                                <?php
                                    $date = date_create(h($message->created));
                                    echo date_format($date, 'd/m/Y H:i') 
                                ?> 
                            </date>
                        </div>
                    </blockquote>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>