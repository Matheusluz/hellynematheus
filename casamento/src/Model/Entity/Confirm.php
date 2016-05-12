<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Confirm Entity.
 *
 * @property int $id
 * @property string $name
 * @property int $phone
 * @property string $email
 * @property string $message
 * @property bool $send_message
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Confirm extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
    
    // protected function _setPhone($phone)
    // {
    //     return preg_replace("/[^0-9]/", "", $phone);
    // }
    // protected function _getPhone($phone)
    // {
    //     return "(" . substr($phone, 0, 2).") " . substr($phone, 2, 4) . "-" . substr($phone, 6);
    // }
}
