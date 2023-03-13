<?php

namespace App\Enums;

enum SubscriptionStatus: string
{
    case ACTIVE       = 'ACTIVE';
    case INACTIVE     = 'INACTIVE';
    case SUSPENDED    = 'SUSPENDED';
    case EXPIRED      = 'EXPIRED';
    case DELETED      = 'DELETED';
}
