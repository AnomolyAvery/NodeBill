<?php

namespace App\Enums;

enum BillingCycle: string
{
    case MONTHLY = "monthly";
    case QUARTERLY = "quarterly";
    case SEMI_ANNUALLY = "semiannually";
    case ANNUALLY = "annually";
}