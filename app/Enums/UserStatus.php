<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE       = 'ACTIVE';
    case INACTIVE     = 'INACTIVE';
    case SUSPENDED    = 'SUSPENDED';
    case BANNED       = 'BANNED';
    case DELETED      = 'DELETED';
}
