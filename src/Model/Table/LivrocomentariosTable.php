<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Livrocomentarios Model
 *
 * @method \App\Model\Entity\Livrocomentario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Livrocomentario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Livrocomentario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Livrocomentario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livrocomentario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livrocomentario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Livrocomentario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Livrocomentario findOrCreate($search, callable $callback = null, $options = [])
 */
class LivrocomentariosTable extends Table
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

        $this->setTable('livrocomentarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Livros')
            ->setForeignKey('id_livro')
            ->setJoinType('INNER');

        $this->belongsTo('Usuarios')
            ->setForeignKey('id_user')
            ->setJoinType('INNER');

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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmptyString('id_user');

        $validator
            ->integer('id_livro')
            ->requirePresence('id_livro', 'create')
            ->notEmptyString('id_livro');

        $validator
            ->dateTime('data_pub')
            ->requirePresence('data_pub', 'create')
            ->notEmptyDateTime('data_pub');

        $validator
            ->integer('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->scalar('texto')
            ->requirePresence('texto', 'create')
            ->notEmptyString('texto');

        return $validator;
    }
}
