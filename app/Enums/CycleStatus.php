<?php

namespace App\Enums;

enum CycleStatus: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case DELETED = 'DELETED';
}
