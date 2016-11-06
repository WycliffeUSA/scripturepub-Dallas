<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * Work is the model behind the work item from .
 */
class Work extends Model
{
    public $id;
    public $app_name;
    public $step;
    public $fields;
    public $values;

    /**
     * @return array the validation rules.
     */
    /*
    public function rules()
    {
        return [
            // name, language and body are required
            [['name', 'language'], 'required'],
            // We need to sanitize them
            [['name', 'language'], 'filter', 'filter' => 'strip_tags'],
        ];
    }
    */

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'app_name' => Yii::t('frontend', 'App Name'),
            'step' => Yii::t('frontend', 'Step'),
        ];
    }
}
