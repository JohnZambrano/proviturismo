<?php

namespace App\Policies;

use App\Models\Resena;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ResenaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Resena $resena): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Resena $resena) {
        return $user->id === $resena->user_id; // Solo el autor puede editar
    }
    
    public function delete(User $user, Resena $resena) {
        return $user->id === $resena->user_id; // Solo el autor puede eliminar
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Resena $resena): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Resena $resena): bool
    {
        return false;
    }
}
