<?php

namespace App\Models;

use App\Models\Traits\HasCycle;
use App\Models\Traits\HasService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory, HasCycle, HasService;
}
