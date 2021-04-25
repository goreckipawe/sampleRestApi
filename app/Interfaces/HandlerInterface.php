<?php

namespace App\Interfaces;

use App\Models\Posts;

interface HandlerInterface
{
    public function getPost(int $postId): Posts;
    public function getAllPosts(): array;
    public function getPostDatabase(int $postId): Posts;
    public function getAllPostsDatabase(): array;
}
