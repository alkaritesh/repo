<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "class_teacher_allocation".
 *
 * @property integer $id
 * @property integer $class_id
 * @property integer $section_id
 * @property integer $session_id
 * @property integer $teacher_id
 */
class ClassTeacherAllocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_teacher_allocation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'section_id', 'session_id', 'teacher_id'], 'required'],
            [['class_id', 'section_id', 'session_id', 'teacher_id'], 'integer']
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
            'section_id' => 'Section ID',
            'session_id' => 'Session ID',
            'teacher_id' => 'Teacher ID',
        ];
    }

}
