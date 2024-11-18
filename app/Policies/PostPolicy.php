<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can view any posts.
     * Allow all authenticated users to view posts.
     */
    public function viewAny(User $user): bool
    {
        return true; // Allow all users to view the list of posts
    }

    /**
     * Determine whether the user can view the post.
     * Allow all users to view a specific post.
     */
    public function view(User $user, Post $post): bool
    {
        return true; // Allow all users to view individual posts
    }

    /**
     * Determine whether the user can create a post.
     * Allow only authenticated users to create a post.
     */
    public function create(User $user): bool
    {
        return $user !== null; // Allow only authenticated users to create posts
    }

    /**
     * Determine whether the user can update the post.
     * Allow only the owner of the post to update it.
     */
    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the post.
     * Allow only the owner of the post to delete it.
     */
    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can restore the post.
     * Allow only the owner to restore the post (if soft-deleted).
     */
    public function restore(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can permanently delete the post.
     * Allow only the owner to force delete the post.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}
