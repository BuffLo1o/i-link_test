<?php

namespace App\Services;


use App\Models\Post;
use App\Services\Contracts\PostServiceInterface;
use Illuminate\Support\Collection;

class PostService implements PostServiceInterface
{
    /**
     * @param Post $post
     * @return Post
     */
    public function like(Post $post): Post
    {
        $post->like++;

        $post->save();
        return $post;
    }

    /**
     * @param $limit
     * @return Collection
     */
    public function getPopular($limit): Collection
    {
        $query = Post::query()->orderBy('like', 'desc');

        if ($limit) {
            $query->limit($limit);
        }

        return $query->get();
}