<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property string $description
 * @property string $code
 * @property string $course_type
 * @property integer $for_class
 * @property integer $cce_status
 * @property integer $status
 * @property string $name
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'code', 'course_type', 'for_class', 'cce_status', 'status', 'name'], 'required'],
            [['description', 'course_type'], 'string'],
            [['for_class', 'cce_status', 'status'], 'integer'],
            [['code'], 'string', 'max' => 30],
            [['name'], 'string', 'max' => 110]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'code' => 'Code',
            'course_type' => 'Course Type',
            'for_class' => 'For Class',
            'cce_status' => 'Cce Status',
            'status' => 'Status',
            'name' => 'Name',
        ];
    }
}
