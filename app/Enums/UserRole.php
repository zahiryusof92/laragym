<?php

namespace App\Enums;

enum UserRole: string
{
    case MEMBER = 'MEMBER';
    case ADMIN = 'ADMIN';
    case STAFF = 'STAFF';
}
