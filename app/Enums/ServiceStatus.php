<?php

namespace App\Enums;

enum ServiceStatus: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case DELETED = 'DELETED';
}
