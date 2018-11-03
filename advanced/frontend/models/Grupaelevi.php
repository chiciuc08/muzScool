<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupaelevi".
 *
 * @property int $grupa_elevi_id
 * @property string $grupa_elevi_nume
 * @property int $grupa_elevi_responsabilID
 * @property string $grupa_elevi_anIncepere
 * @property string $grupa_elevi_anFinisare
 */
class Grupaelevi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupaelevi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grupa_elevi_nume', 'grupa_elevi_responsabilID', 'grupa_elevi_anIncepere'], 'required'],
            [['grupa_elevi_responsabilID'], 'integer'],
            [['grupa_elevi_anIncepere', 'grupa_elevi_anFinisare'], 'safe'],
            [['grupa_elevi_nume'], 'string', 'max' => 25],
            [['grupa_elevi_nume'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grupa_elevi_id' => 'Grupa Elevi ID',
            'grupa_elevi_nume' => 'Grupa Elevi Nume',
            'grupa_elevi_responsabilID' => 'Grupa Elevi Responsabil ID',
            'grupa_elevi_anIncepere' => 'Grupa Elevi An Incepere',
            'grupa_elevi_anFinisare' => 'Grupa Elevi An Finisare',
        ];
    }
}
