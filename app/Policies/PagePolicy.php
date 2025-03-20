<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Page;
use App\Models\User;

final class PagePolicy
{
    public function view(User $user, Page $page): bool
    {
        return true;
    }

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Page $page): bool
    {
        return true;
    }

    public function delete(User $user, Page $page): bool
    {
        return true;
    }

    public function forceDelete(User $user, Page $page): bool
    {
        return true;
    }

    public function restore(User $user, Page $page): bool
    {
        return true;
    }
}
