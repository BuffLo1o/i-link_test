<?php


namespace App\Services\Contracts;


use App\Models\Post;
use Illuminate\Support\Collection;

interface PostServiceInterface
{
    /**
     * @param Post $post
     * @return Post
     */
    public function like(Post $post) : Post;

    /**
     * @param $limit
     * @return Collection
     */
    public function getPopular($limit) : Collection;
}