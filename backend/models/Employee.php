<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $name
 * @property string $dob
 * @property string $gender
 * @property string $marital_status
 * @property integer $age
 * @property string $residence_address
 * @property string $permanent_address
 * @property integer $designation
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dob', 'gender', 'marital_status', 'age', 'residence_address', 'permanent_address', 'designation'], 'required'],
            [['dob'], 'safe'],
            [['gender', 'marital_status', 'residence_address', 'permanent_address'], 'string'],
            [['age', 'designation'], 'integer'],
            [['name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'marital_status' => 'Marital Status',
            'age' => 'Age',
            'residence_address' => 'Residence Address',
            'permanent_address' => 'Permanent Address',
            'designation' => 'Designation',
        ];
    }
}
