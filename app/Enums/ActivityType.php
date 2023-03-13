<?php

namespace App\Enums;

enum ActivityType: string
{
    case COMMON       = 'COMMON';
    case USER_LOGIN   = 'USER_LOGIN';
    case USER_LOGOUT  = 'USER_LOGOUT';
}
