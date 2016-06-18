<?php
namespace App\Model\Table;

use App\Model\Entity\Confirm;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Confirms Model
 *
 */
class ConfirmsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('confirms');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->hasOne('Messages', ['propertyName' => 'messages']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name')
            ->notEmpty('name');

        $validator
            ->integer('phone')
            ->allowEmpty('phone');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('message');
            
        $validator
            ->integer('quantidy')
            ->requirePresence('quantidy')
            ->notEmpty('quantidy');

        return $validator;
    }
    
    public function beforeSave($event, $entity, $options) {
        pr($entity);
    }

    public function afterSave($event, $entity, $options) {
        if ($entity->isNew()) {
            if($entity->get('message') != ""){
                
                
                $messageTable = TableRegistry::get('Messages');

                // $message = new Message([
                //     'confirm_id' => $entity->get('id'),
                //     'name' => $entity->get('name'),
                //     'phone' => $entity->get('phone'),
                //     'email' => $entity->get('email'),
                //     'message' => $entity->get('message')
                // ]);

                $message = $messageTable->newEntity();
                
                $message->confirm_id = $entity->get('id');
                $message->name = $entity->get('name');
                $message->phone = $entity->get('phone');
                $message->email = $entity->get('email');
                $message->message = $entity->get('message');
                
                $messageTable->save($message);
            }
        }
    }
}
