<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class PlanCategory extends Model
{
    protected $fillable = [
        "name",
        "description",
        "enabled"
    ];

    public $timestamps = true;

    protected function casts()
    {
        return [
            'enabled' => 'boolean'
        ];
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    #[Scope]
    protected function enabled(Builder $query): void
    {
        $query->where('enabled', true);
    }
}
