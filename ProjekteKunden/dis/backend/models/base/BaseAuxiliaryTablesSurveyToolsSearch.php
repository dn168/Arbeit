<?php

namespace app\models\base;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use \app\models\AuxiliaryTablesSurveyTools;

/**
* This is the search base model class for model "AuxiliaryTablesSurveyTools".
* DO NOT EDIT THIS FILE.
*/
abstract class BaseAuxiliaryTablesSurveyToolsSearch extends AuxiliaryTablesSurveyTools
{
    use \app\models\core\SearchModelTrait;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'method_short', 'tool_name', 'organisaton_name_abbreviation', 'comment'],'safe'],
        ];
    }

    public function getExtraSortAttributes () {
        return [
        ];
    }

    protected function addQueryColumns($query) {
        $this->addQueryColumn($query, 'id', 'number');
        $this->addQueryColumn($query, 'method_short', 'string');
        $this->addQueryColumn($query, 'tool_name', 'string');
        $this->addQueryColumn($query, 'organisaton_name_abbreviation', 'string');
        $this->addQueryColumn($query, 'comment', 'string');
    }

    protected function addQuerySearchAttributes($query) {
        $joins = [];
        $this->createSearchJoins($query, $joins);
    }

}