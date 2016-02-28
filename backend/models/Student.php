<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $name
 * @property string $father_name
 * @property string $mother_name
 * @property string $address
 * @property string $admission_no
 * @property string $joining_date
 * @property string $created_on
 * @property string $created_on_time
 * @property string $guardian_name
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'father_name', 'mother_name', 'address', 'admission_no', 'joining_date', 'guardian_name'], 'required'],
            [['address'], 'string'],
            [['joining_date', 'created_on', 'created_on_time'], 'safe'],
            [['name', 'father_name', 'mother_name', 'guardian_name'], 'string', 'max' => 220],
            [['admission_no'], 'string', 'max' => 100]
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
            'father_name' => 'Father Name',
            'mother_name' => 'Mother Name',
            'address' => 'Address',
            'admission_no' => 'Admission No',
            'joining_date' => 'Joining Date',
            'created_on' => 'Created On',
            'created_on_time' => 'Created On Time',
            'guardian_name' => 'Guardian Name',
        ];
    }
    /**
     *  before save
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
                $this->created_on=date("Y-m-d");
                $this->created_on_time=date("H:i:s");
                return true;
            }
            else{
                return false;
            }
    }
}
