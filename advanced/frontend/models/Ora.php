<?php

namespace app\models;


use Yii;
use common\models\User;

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
class Ora extends \yii\db\ActiveRecord
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
            'ora_nrSala' => 'Sala',
            'nota' => 'Nota',
            'ora_data' => 'Ora Data',
            'ora_anInvatamint' => 'Ora An Invatamint',
            'ora_semestru' => 'Ora Semestru',
            'ora_descriere' => 'Ora Descriere',
        ];
    }
    public function getProfesor(){
        return $this->hasOne(User::className(), ['id' => 'ora_idProfesor']);
    }
    public function getProfesorNumePrenume() {
        return $this->profesor->users_nume." ".$this->profesor->users_prenume;
    }
    public function getDisciplina(){
        return $this->hasOne(Disciplina::className(), ['disciplina_id' => 'ora_idDisciplina']);
    }
    public function getDisciplinaNume() {
        return $this->disciplina->disciplina_nume;
    }
    public function getData(){
        $lectia = explode(" ",$this->ora_data);
        return $lectia[0];
    }
     public function getDataRo(){
         setlocale(LC_TIME,"ro");
         return strftime('%A %Y-%m-%d',strtotime(self::getData()));
     }
    public function getLectia(){
        $lectia = explode(" ",$this->ora_data);
        return "Lectia ".self::oraLectie($lectia[1]);
    }
    public function oraLectie($ora){
        switch ($ora){
            case "07:45:00":
                return 0;
            case "08:30:00":
                return 1;
            case "09:20:00":
                return 2;
            case "10:15:00":
                return 3;
            case "11:15:00":
                return 4;
            case "12:15:00":
                return 5;
            case "13:10:00":
                return 6;
            case "14:00:00":
                return 7;
        }
    }
}
