<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $puesto
 * @property string $telefono1
 * @property string $telefono2
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $role
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class User extends Entity
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
    
    // Make all fields mass assignable except for primary key field "id".

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    // ...
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
    // ...
}
