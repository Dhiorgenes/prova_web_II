<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reserve Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date_reserv
 * @property int $id_user
 * @property int $id_vehicle
 */
class Reserve extends Entity
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
        'date_reserv' => true,
        'id_user' => true,
        'id_vehicle' => true
    ];
}
