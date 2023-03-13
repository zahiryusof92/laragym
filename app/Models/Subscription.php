<?php

namespace App\Models;

use App\Models\Traits\HasPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Laravel\Cashier\Subscription as CashierSubscription;

class Subscription extends CashierSubscription
{
    use HasFactory, HasPackage;
}
