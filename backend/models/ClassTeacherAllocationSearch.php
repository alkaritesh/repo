<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ClassTeacherAllocation;

/**
 * ClassTeacherAllocationSearch represents the model behind the search form about `backend\models\ClassTeacherAllocation`.
 */
class ClassTeacherAllocationSearch extends ClassTeacherAllocation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'class_id', 'section_id', 'session_id', 'teacher_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ClassTeacherAllocation::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'class_id' => $this->class_id,
            'section_id' => $this->section_id,
            'session_id' => $this->session_id,
            'teacher_id' => $this->teacher_id,
        ]);

        return $dataProvider;
    }
}
