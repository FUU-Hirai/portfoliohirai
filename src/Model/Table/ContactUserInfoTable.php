<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactUserInfo Model
 *
 * @method \App\Model\Entity\ContactUserInfo newEmptyEntity()
 * @method \App\Model\Entity\ContactUserInfo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ContactUserInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactUserInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactUserInfo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ContactUserInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactUserInfo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactUserInfo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactUserInfo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactUserInfo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactUserInfo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactUserInfo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactUserInfo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactUserInfoTable extends Table
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

        $this->setTable('contact_user_info');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('company_name')
            ->maxLength('company_name', 50)
            ->requirePresence('company_name', 'create')
            ->notEmptyString('company_name','お名前を入力して下さい');

        $validator
            ->email('email')
            ->requirePresence('email', 'create','メールアドレスを入力して下さい')
            ->notEmptyString('email','メールアドレスを入力して下さい');

        $validator
            ->scalar('tel')
            ->maxLength('tel', 13)
            ->requirePresence('tel', 'create')
            ->allowEmptyString('tel');

        $validator
            ->scalar('message')
            ->maxLength('message', 1000)
            ->requirePresence('message', 'create')
            ->allowEmptyString('message');

        return $validator;
    }
}
