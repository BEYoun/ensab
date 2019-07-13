<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pfe Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Filieres
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Pfe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pfe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pfe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pfe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pfe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pfe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pfe findOrCreate($search, callable $callback = null, $options = [])
 */
class PfeTable extends Table
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

        $this->setTable('pfe');
        $this->setDisplayField('Pfe_ID');
        $this->setPrimaryKey('Pfe_ID');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Filieres', [
            'foreignKey' => 'filiere_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'encadrant_interne_id'
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
            ->integer('Pfe_ID')
            ->allowEmpty('Pfe_ID', 'create');

        $validator
            ->allowEmpty('intitule');

        $validator
            ->allowEmpty('societe');

        $validator
            ->allowEmpty('encadrant_externe');

        $validator
            ->date('date_debut')
            ->allowEmpty('date_debut');

        $validator
            ->date('date_fin')
            ->allowEmpty('date_fin');

        $validator
            ->allowEmpty('type');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['filiere_id'], 'Filieres'));
        $rules->add($rules->existsIn(['encadrant_interne_id'], 'Users'));

        return $rules;
    }
}
