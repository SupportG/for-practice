<?php

namespace App\Models;

use App\Filters\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'content',
    ];

    public function scopeFilter($query, array $filters)
    {
        $namespace = 'App\Filters\PostFilter';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }
}
