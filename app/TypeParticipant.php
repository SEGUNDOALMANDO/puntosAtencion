<?php

namespace App;

class TypeParticipant extends \Eloquent
{
    public function getTypeTitleAttribute()
    {
        return \Lang::get('utils.job_types.' .  $this->job_type);
    }
}