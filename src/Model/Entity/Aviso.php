<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aviso Entity.
 *
 * @property int $id
 * @property string $titulo
 * @property string $descripcion
 * @property \Cake\I18n\Time $caduca
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $importancia_aviso_id
 * @property \App\Model\Entity\ImportanciaAviso $importancia_aviso
 * @property int $tipo_aviso_id
 * @property \App\Model\Entity\TipoAviso $tipo_aviso
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Aviso extends Entity
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
}
