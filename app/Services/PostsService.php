<?php

namespace App\Services;

use App\Http\Controllers\PostController;
use App\Interfaces\HandlerInterface;
use App\Models\Posts;
use Illuminate\Support\Facades\Http;

class PostsService implements HandlerInterface
{

    public function getPost(int $postId): Posts
    {
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/posts', [
            'id' => $postId
        ]);

        $jsonData = $response->json();

        $data = Posts::hydrate($jsonData)->flatten();

        return $data->first();
    }

    public function getAllPosts(): array
    {
        $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/posts');

        $jsonData = $response->json();

        return $jsonData;
    }

    public function getPostDatabase(int $postId): Posts
    {
        return Posts::findOrFail($postId);
    }

    public function getAllPostsDatabase(): array
    {
        return Posts::all()->toArray();
    }
}
