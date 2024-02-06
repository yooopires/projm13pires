<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class ArticlesTable extends Table
{
public function initialize(array $config) :void
{ $this->addBehavior('Timestamp'); }
public function validationDefault(Validator $validator): Validator
{ $validator
    ->notEmpty('NomePiloto')
    ->notEmpty('Equipa')
    ->notEmpty('body');
return $validator; }
}
?>