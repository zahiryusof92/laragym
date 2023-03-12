<?php

namespace App\Enums;

enum PackageStatus: string
{
    case ACTIVE = 'ACTIVE';
    case INACTIVE = 'INACTIVE';
    case DELETED = 'DELETED';
}
