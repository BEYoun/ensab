<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reunion Model
 *
 * @method \App\Model\Entity\Reunion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Reunion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Reunion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Reunion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Reunion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Reunion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Reunion findOrCreate($search, callable $callback = null, $options = [])
 */
class ReunionTable extends Table
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

        $this->setTable('reunion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('ordre');

        $validator
            ->integer('pfe')
            ->allowEmpty('pfe');

        $validator
            ->date('date_reunion')
            ->allowEmpty('date_reunion');

        $validator
            ->requirePresence('remarque', 'create')
            ->notEmpty('remarque');

        return $validator;
    }
}
