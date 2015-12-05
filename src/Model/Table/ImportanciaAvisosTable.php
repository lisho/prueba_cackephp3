<?php
namespace App\Model\Table;

use App\Model\Entity\ImportanciaAviso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ImportanciaAvisos Model
 *
 * @property \Cake\ORM\Association\HasMany $Avisos
 */
class ImportanciaAvisosTable extends Table
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

        $this->table('importancia_avisos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Avisos', [
            'foreignKey' => 'importancia_aviso_id'
        ]);
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('importancia', 'create')
            ->notEmpty('importancia');

        return $validator;
    }
}
