<?php

namespace app\models\base;

use Yii;

/**
 * This is the generated model base class for table "contact_repository".
 * DO NOT EDIT THIS CLASS MANUALLY!
 *
 * @property int $id ID
 * @property string|null $repository_name Repository Name
 * @property string|null $department Department
 * @property string|null $city City
 * @property string|null $postal_code Postal Code
 * @property string|null $country Country
 * @property string|null $comment Additional Information
 * @property string|null $organisation_name Organisation Name
 * @property string|null $street Street/Postbox
 * @property string|null $state State
 * @property string|null $website Website
 * @property string|null $contact_person Contact Person
 * @property string|null $contact_email Contact Email
 * @property string|null $contact_phone Contact Phone Number
 * @property string|null $repository_name_abbreviation Repository Name Abbreviation
 */
abstract class BaseContactRepository extends \app\models\core\Base
{
    /* [i.e columnName => [displayColumn, relationName],[..]] */
    const MANY_TO_MANY_COLUMNS = [];
    /* [[i.e columnName => displayColumn],[..]] */
    const ONE_TO_MANY_COLUMNS = [];

    const MODULE = 'Contact';
    const SHORT_NAME = 'Repository';

    const NAME_ATTRIBUTE = 'id';
    const PARENT_CLASSNAME = '';
    const ANCESTORS = [];
    const DEFAULT_VALUES = [];


    public static function getFormFilters() {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_repository';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return array_merge(parent::rules(), [
            [['repository_name', 'department', 'city', 'postal_code', 'country', 'comment', 'organisation_name', 'street', 'state', 'website', 'contact_person', 'contact_email', 'contact_phone', 'repository_name_abbreviation'], 'string', 'max' => 255],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'repository_name' => Yii::t('app', 'Repository Name'),
            'department' => Yii::t('app', 'Department'),
            'city' => Yii::t('app', 'City'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'country' => Yii::t('app', 'Country'),
            'comment' => Yii::t('app', 'Additional Information'),
            'organisation_name' => Yii::t('app', 'Organisation Name'),
            'street' => Yii::t('app', 'Street/Postbox'),
            'state' => Yii::t('app', 'State'),
            'website' => Yii::t('app', 'Website'),
            'contact_person' => Yii::t('app', 'Contact Person'),
            'contact_email' => Yii::t('app', 'Contact Email'),
            'contact_phone' => Yii::t('app', 'Contact Phone Number'),
            'repository_name_abbreviation' => Yii::t('app', 'Repository Name Abbreviation'),
        ];
    }




    public function fields()
    {
        $fields = [
        ];
        return array_merge(parent::fields(), $fields);
    }

    public function load($data, $formName = null)
    {
        return parent::load($data, $formName);
    }




    /**
    * {@inheritdoc}
    */
    public function beforeDelete()
    {
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }


}

