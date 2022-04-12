<?php

namespace app\models\base;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use \app\models\ProjectProgram;

/**
* This is the search base model class for model "ProjectProgram".
* DO NOT EDIT THIS FILE.
*/
abstract class BaseProjectProgramSearch extends ProjectProgram
{
    use \app\models\core\SearchModelTrait;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'program_name', 'program_acronym', 'comment'],'safe'],
        ];
    }

    public function getExtraSortAttributes () {
        return [
        ];
    }

    protected function addQueryColumns($query) {
        $this->addQueryColumn($query, 'id', 'number');
        $this->addQueryColumn($query, 'program_name', 'string');
        $this->addQueryColumn($query, 'program_acronym', 'string');
        $this->addQueryColumn($query, 'comment', 'string');
    }

    protected function addQuerySearchAttributes($query) {
        $joins = [];
        $this->createSearchJoins($query, $joins);
    }

}