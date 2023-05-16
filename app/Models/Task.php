<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'checked', 'goal_id'];
    public $timestamps = false;

    public function goal()
    {
        return $this->belongsTo(Goal::class);
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('checked', 'asc');
            $queryBuilder->orderBy('name', 'asc');
        });
    }
}
