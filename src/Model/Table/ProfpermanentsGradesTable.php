<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProfpermanentsGrades Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Profpermanents
 * @property \Cake\ORM\Association\BelongsTo $Grades
 *
 * @method \App\Model\Entity\ProfpermanentsGrade get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProfpermanentsGrade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProfpermanentsGrade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProfpermanentsGrade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProfpermanentsGrade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProfpermanentsGrade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProfpermanentsGrade findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfpermanentsGradesTable extends Table
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

        $this->setTable('profpermanents_grades');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Profpermanents', [
            'foreignKey' => 'profpermanent_id',
            'joinType' => 'INNER'
        ]);
         $this->belongsTo('Grades', [
            'foreignKey' => 'grade_id',
            'joinType' => 'INNER'
        ]); 
        $this->belongsTo('Infosgradesprofs', [
            'foreignKey' => 'grade_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->date('date_grade')
            ->requirePresence('date_grade', 'create')
            ->notEmpty('date_grade');

        $validator
            ->requirePresence('cadre', 'create')
            ->notEmpty('cadre');

        $validator
            ->integer('echelon')
            ->requirePresence('echelon', 'create')
            ->notEmpty('echelon');

        $validator
            ->requirePresence('sous_grade', 'create')
            ->notEmpty('sous_grade');

        $validator
            ->date('date_exep')
            ->requirePresence('date_exep', 'create')
            ->notEmpty('date_exep');

        $validator
            ->date('date_normal')
            ->requirePresence('date_normal', 'create')
            ->notEmpty('date_normal');

        $validator
            ->date('date_rapide')
            ->requirePresence('date_rapide', 'create')
            ->notEmpty('date_rapide');

        $validator
            ->date('date_next_echelon')
            ->requirePresence('date_next_echelon', 'create')
            ->notEmpty('date_next_echelon');

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
        $rules->add($rules->existsIn(['profpermanent_id'], 'Profpermanents'));
        //$rules->add($rules->existsIn(['grade_id'], 'Grades'));

        return $rules;
    }
}
