<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "disciplina".
 *
 * @property int $disciplina_id
 * @property string $disciplina_nume
 */
class Disciplina extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disciplina';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disciplina_nume'], 'required'],
            [['disciplina_nume'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'disciplina_id' => 'Disciplina ID',
            'disciplina_nume' => 'Disciplina Nume',
        ];
    }
}
