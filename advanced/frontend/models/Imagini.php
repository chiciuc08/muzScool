<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imagini".
 *
 * @property int $imagini_id
 * @property string $imagini_nume
 * @property string $imagini_adresa
 * @property string $createdBy
 * @property string $created_at
 * @property string $updatedBy
 * @property string $updated_at
 */
class Imagini extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imagini';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagini_nume', 'imagini_adresa', 'createdBy', 'created_at', 'updatedBy', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['imagini_nume', 'imagini_adresa'], 'string', 'max' => 255],
            [['createdBy', 'updatedBy'], 'string', 'max' => 11],
            [['imagini_nume'], 'unique'],
            [['imagini_adresa'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'imagini_id' => 'Imagini ID',
            'imagini_nume' => 'Imagini Nume',
            'imagini_adresa' => 'Imagini Adresa',
            'createdBy' => 'Created By',
            'created_at' => 'Created At',
            'updatedBy' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }
}
