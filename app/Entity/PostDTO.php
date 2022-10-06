<?php

namespace App\Entity;

class PostDTO
{
    public function __construct(
        public string|null $title = null,
        public string|null $content = null,
    ) {}
}
