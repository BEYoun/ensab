<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Documentstage Model
 *
 * @method \App\Model\Entity\Documentstage get($primaryKey, $options = [])
 * @method \App\Model\Entity\Documentstage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Documentstage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Documentstage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Documentstage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Documentstage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Documentstage findOrCreate($search, callable $callback = null, $options = [])
 */
class DocumentstageTable extends Table
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

        $this->setTable('documentstage');
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
            ->allowEmpty('nom');

        $validator
            ->allowEmpty('lien');

        $validator
            ->integer('ID_PFE')
            ->requirePresence('ID_PFE', 'create')
            ->notEmpty('ID_PFE');

        return $validator;
    }
}
