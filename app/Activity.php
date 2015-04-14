<?php

    namespace App;

class Activity extends \Eloquent
{
    public function participants(){
        return $this->hasMany('Activities\Entities\Participant', 'activity_id', 'id');
    }
}