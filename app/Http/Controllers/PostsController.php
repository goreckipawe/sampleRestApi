<?php

namespace App\Http\Controllers;

use App\Services\PostsService;

class PostsController extends Controller
{
    private $postsService;

    public function __construct()
    {
        $this->postsService = new PostsService();
    }

    public function getPost(int $postId)
    {
        return $this->postsService->getPost($postId);
    }

    public function getAllPosts(): array
    {
        return $this->postsService->getAllPosts();
    }

    public function getPostDatabase(int $postId)
    {
        return $this->postsService->getPostDatabase($postId);
    }

    public function getAllPostsDatabase(): array
    {
        return $this->postsService->getAllPostsDatabase();
    }
}
