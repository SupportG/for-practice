<?php

namespace App\Filters\PostFilter;

use App\Filters\FilterContract;

class TitleFilter
{
    protected $query;

    public function __construct($query)
    {
        $this->query = $query;
    }

    public function handle($value): void
    {
        $this->query->where('title', "like", "%{$value}%");
    }
}
