<?php

namespace App\Policies;

use App\Dokter;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DokterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Dokter $dokter)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Dokter $dokter)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Dokter $dokter)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Dokter $dokter)
    {
        return $user->isAdmin() || $user->isCreator();
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Dokter $dokter)
    {
        return $user->isAdmin() || $user->isCreator();
    }
}
