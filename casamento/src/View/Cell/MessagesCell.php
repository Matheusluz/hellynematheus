<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Messages cell
 */
class MessagesCell extends Cell
{
    public function display()
    {
        $this->loadModel('Messages');
        $messages = $this->Messages->find('all')
            ->where(['Messages.confirmed' => true])
            ->order(['Messages.created' => 'DESC']);
        $this->set('messages', $messages);
    }
}
