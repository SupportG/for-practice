<?php

namespace App\Services;

use App\Entity\PostDTO;
use App\Repostories\PostRepository;
use http\Env\Request;

class PostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll(PostDTO $postDTO)
    {
        return $this->postRepository->getAll($postDTO);
    }

    public function getAllArr()
    {
        return $this->postRepository->getAllArr();
    }
}
