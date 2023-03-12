<?php

namespace app\models;

use yii\db\ActiveRecord;

class QueueStatuses extends ActiveRecord
{
    public function getStatuses(){
        $isExists = QueueStatuses::find()->where(['id' => 1])->exists();
        if ($isExists==false){
            $QueueStatuses = new QueueStatuses();
            $QueueStatuses->s_name = 's_name';
            $QueueStatuses->c_name = 'c_name';
            $QueueStatuses->c_id = 'c_id';
            $QueueStatuses->a_type = 'a_type';
            $QueueStatuses->direction = 'direction';
            $QueueStatuses->activation = 'activation';
            $QueueStatuses->c_state = 'c_state';
            $QueueStatuses->control = 'control';
            $QueueStatuses->save();
        }
    }
}