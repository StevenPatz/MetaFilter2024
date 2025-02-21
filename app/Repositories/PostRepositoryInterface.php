<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Post;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getPosts();

    public function getBySubdomain();

    public function getDraftPosts();

    public function getPopularFavorites();

    public function getPopularPosts();

    public function getRandomPost();

    public function getRecentPosts();

    public function getRelatedPosts(Post $post);

    public function updateState(Post $post, string $state);
}
