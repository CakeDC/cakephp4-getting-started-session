<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MailingListsUsers Model
 *
 * @property \App\Model\Table\MailingListsTable&\Cake\ORM\Association\BelongsTo $MailingLists
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\MailingListsUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\MailingListsUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MailingListsUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MailingListsUser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MailingListsUser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MailingListsUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MailingListsUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MailingListsUser findOrCreate($search, callable $callback = null, $options = [])
 */
class MailingListsUsersTable extends Table
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

        $this->setTable('mailing_lists_users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('MailingLists', [
            'foreignKey' => 'mailing_list_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['mailing_list_id'], 'MailingLists'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
