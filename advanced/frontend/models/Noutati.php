<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noutati".
 *
 * @property int $noutati_id
 * @property string $noutati_titlu
 * @property string $noutati_text
 * @property string $noutati_data
 * @property string $createdBy
 * @property string $data_insert
 * @property string $id_user_update
 * @property string $data_update
 */
class Noutati extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noutati';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['noutati_titlu', 'noutati_text', 'createdBy', 'data_insert', 'id_user_update', 'data_update'], 'required'],
            [['noutati_text','createdBy', 'id_user_update'], 'string'],
            [['data_insert', 'data_update'], 'safe'],
            [['noutati_titlu'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'noutati_id' => 'Noutati ID',
            'noutati_titlu' => 'Noutati Titlu',
            'noutati_text' => 'Noutati Text',
            'createdBy' => 'Id User Insert',
            'data_insert' => 'Data Insert',
            'id_user_update' => 'Id User Update',
            'data_update' => 'Data Update',
        ];
    }
}
