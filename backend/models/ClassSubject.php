<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_subject".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $subject_id
 * @property integer $session_id
 * @property integer $section_id
 *
 * @property Section $section
 * @property ClassMaster $class
 * @property Subject $subject
 * @property Session $session
 */
class ClassSubject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'subject_id', 'session_id', 'section_id'], 'required'],
            [['class_id', 'subject_id', 'session_id', 'section_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_id' => 'Class ID',
            'subject_id' => 'Subject ID',
            'session_id' => 'Session ID',
            'section_id' => 'Section ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(ClassMaster::className(), ['id' => 'class_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession()
    {
        return $this->hasOne(Session::className(), ['id' => 'session_id']);
    }
}
