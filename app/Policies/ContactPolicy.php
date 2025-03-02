<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Contact;
use App\Models\User;

final class ContactPolicy
{
    public function view(User $user, Contact $contact): bool
    {
        return false;
    }

    public function viewAny(User $user): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        //
        return false;
    }

    public function update(User $user, Contact $contact): bool
    {
        //
        return false;
    }

    public function delete(User $user, Contact $contact): bool
    {
        //
        return false;
    }

    public function forceDelete(User $user, Contact $contact): bool
    {
        //
        return false;
    }

    public function restore(User $user, Contact $contact): bool
    {
        //
        return false;
    }
}
