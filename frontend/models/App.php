<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * App is the model behind the contact form.
 */
class App extends Model
{
    public $id;
    public $name;
    public $language;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, language and body are required
            [['name', 'language'], 'required'],
            // We need to sanitize them
            [['name', 'language'], 'filter', 'filter' => 'strip_tags'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => Yii::t('frontend', 'Name'),
            'language' => Yii::t('frontend', 'Language'),
        ];
    }
}
