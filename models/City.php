<?php

namespace kouosl\havadurumu\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $gorunen_ad
 * @property string $ad
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gorunen_ad', 'ad'], 'required'],
            [['gorunen_ad', 'ad'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gorunen_ad' => 'Gorunen Ad',
            'ad' => 'Ad',
        ];
    }
	
}
