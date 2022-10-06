<?php

namespace App\Repostories;

use App\Models\Post;
use http\Env\Request;

class PostRepository
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAll(\App\Entity\PostDTO $postDTO)
    {
        $filters = collect($postDTO)
            ->only("title")
            ->toArray();

        return $this
            ->post
            ->filter($filters)
            ->get()
            ->toArray();
    }

    public function getAllArr()
    {
        return $this->post
            ->select("title", "content")
            ->get()
            /*->map(function ($item) {
                return [
                    "title" => $item->title,
                    "content" => $item->content,
                ];
            })*/
            ->toArray();
    }
}
