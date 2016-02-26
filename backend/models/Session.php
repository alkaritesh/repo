<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "session".
 *
 * @property integer $id
 * @property string $start_date
 * @property string $end_date
 * @property integer $status
 */
class Session extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'session';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'end_date', 'status'], 'required'],
            [['start_date', 'end_date'], 'safe'],
            [['status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'status' => 'Status',
        ];
    }
}
