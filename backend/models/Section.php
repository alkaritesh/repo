<?php

namespace backend\models;

use Yii;
use backend\models\ClassMaster;
use backend\models\Session;

/**
 * This is the model class for table "section".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $session_id
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'session_id'], 'required'],
            [['name'], 'string'],
            [['class_id', 'session_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_id' => 'Class ',
            'name' => 'Name',
            'session_id' => 'Session',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getclassmaster()
    {
        return $this->hasone(ClassMaster::className(), ['id' => 'class_id']);
    }
    public function getsession()
    {
        return $this->hasOne(Session::className(),['id'=>'session_id']);
    }


}
