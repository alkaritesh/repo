<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property integer $type
 * @property integer $session
 *
 * @property Session $session0
 * @property SubjectType $type0
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type', 'session'], 'required'],
            [['type', 'session'], 'integer'],
            [['name'], 'string', 'max' => 250],
            [['code'], 'string', 'max' => 90]
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
            'code' => 'Code',
            'type' => 'Type',
            'session' => 'Session',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession0()
    {
        return $this->hasOne(Session::className(), ['id' => 'session']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType0()
    {
        return $this->hasOne(SubjectType::className(), ['id' => 'type']);
    }
}
