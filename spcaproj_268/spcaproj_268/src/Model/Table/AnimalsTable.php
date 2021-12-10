<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Animals Model
 *
 * @method \App\Model\Entity\Animal newEmptyEntity()
 * @method \App\Model\Entity\Animal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Animal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Animal get($primaryKey, $options = [])
 * @method \App\Model\Entity\Animal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Animal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Animal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Animal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Animal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Animal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AnimalsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('animals');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('breed')
            ->maxLength('breed', 255)
            ->requirePresence('breed', 'create')
            ->notEmptyString('breed');

        $validator
            ->scalar('sex')
            ->maxLength('sex', 25)
            ->requirePresence('sex', 'create')
            ->notEmptyString('sex');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 255)
            ->requirePresence('comments', 'create')
            ->notEmptyString('comments');

        return $validator;
    }
}
