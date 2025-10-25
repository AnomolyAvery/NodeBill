<?php

namespace App\Models;

use App\Enums\BillingCycle;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Plan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_monthly',
        'price_quarterly',
        'price_semiannually',
        'price_annually',
        'plan_category_id'
    ];

    public $timestamps = true;

    protected function casts()
    {
        return [
            'price_monthly' => 'integer',
            'price_quarterly' => 'integer',
            'price_semiannually' => 'integer',
            'price_annually' => 'integer'
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PlanCategory::class, 'plan_category_id');
    }

    #[Scope]
    protected function enabled(Builder $query): void
    {
        $query->where(function ($q) {
            $q->where("price_monthly", ">=", 0)
                ->orWhere("price_quarterly", ">=", 0)
                ->orWhere("price_semiannually", ">=", 0)
                ->orWhere("price_annually", ">=", 0);
        });
    }
}
