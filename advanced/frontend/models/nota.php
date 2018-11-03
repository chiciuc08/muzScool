<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_orascolara".
 *
 * @property int $ora_id
 * @property int $ora_idElev
 * @property int $ora_idProfesor
 * @property int $ora_idDisciplina
 * @property int $ora_nrSala
 * @property int $nota
 * @property string $ora_data
 * @property int $ora_anInvatamint
 * @property int $ora_semestru
 * @property string $ora_descriere
 */
class nota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_orascolara';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ora_idElev', 'ora_idProfesor', 'ora_idDisciplina', 'ora_nrSala', 'ora_data', 'ora_anInvatamint', 'ora_semestru'], 'required'],
            [['ora_idElev', 'ora_idProfesor', 'ora_idDisciplina', 'ora_nrSala', 'nota', 'ora_anInvatamint', 'ora_semestru'], 'integer'],
            [['ora_data'], 'safe'],
            [['ora_descriere'], 'string', 'max' => 255],
            [['ora_idElev', 'ora_data'], 'unique', 'targetAttribute' => ['ora_idElev', 'ora_data']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ora_id' => 'Ora ID',
            'ora_idElev' => 'Ora Id Elev',
            'ora_idProfesor' => 'Ora Id Profesor',
            'ora_idDisciplina' => 'Ora Id Disciplina',
            'ora_nrSala' => 'Ora Nr Sala',
            'nota' => 'Nota',
            'ora_data' => 'Ora Data',
            'ora_anInvatamint' => 'Ora An Invatamint',
            'ora_semestru' => 'Ora Semestru',
            'ora_descriere' => 'Ora Descriere',
        ];
    }
}
