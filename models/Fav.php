<?php

namespace kouosl\havadurumu\models;

use Yii;

/**
 * This is the model class for table "fav".
 *
 * @property int $id
 * @property int $user_id
 * @property int $il_id
 */
class Fav extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fav';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'il_id'], 'required'],
            [['user_id', 'il_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'il_id' => 'Il ID',
        ];
    }
}
