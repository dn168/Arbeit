<?php

namespace app\models\base;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use \app\models\ContactRepository;

/**
* This is the search base model class for model "ContactRepository".
* DO NOT EDIT THIS FILE.
*/
abstract class BaseContactRepositorySearch extends ContactRepository
{
    use \app\models\core\SearchModelTrait;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'repository_name', 'repository_name_abbreviation', 'organisation_name', 'street', 'city', 'postal_code', 'state', 'country', 'website', 'contact_person', 'contact_email', 'contact_phone', 'department', 'comment'],'safe'],
        ];
    }

    public function getExtraSortAttributes () {
        return [
        ];
    }

    protected function addQueryColumns($query) {
        $this->addQueryColumn($query, 'id', 'number');
        $this->addQueryColumn($query, 'repository_name', 'string');
        $this->addQueryColumn($query, 'department', 'string');
        $this->addQueryColumn($query, 'city', 'string');
        $this->addQueryColumn($query, 'postal_code', 'string');
        $this->addQueryColumn($query, 'country', 'string');
        $this->addQueryColumn($query, 'comment', 'string');
        $this->addQueryColumn($query, 'organisation_name', 'string');
        $this->addQueryColumn($query, 'street', 'string');
        $this->addQueryColumn($query, 'state', 'string');
        $this->addQueryColumn($query, 'website', 'string');
        $this->addQueryColumn($query, 'contact_person', 'string');
        $this->addQueryColumn($query, 'contact_email', 'string');
        $this->addQueryColumn($query, 'contact_phone', 'string');
        $this->addQueryColumn($query, 'repository_name_abbreviation', 'string');
    }

    protected function addQuerySearchAttributes($query) {
        $joins = [];
        $this->createSearchJoins($query, $joins);
    }

}