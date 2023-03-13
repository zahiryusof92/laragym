<?php

namespace App\Models\Traits;

use App\Models\Activity;

trait HasActivities
{
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
