<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait Followable
{

    public function following()
    {

    }

    /**
     * Who this user follows relationship
     * @return BelongsToMany
     */
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    /**
     * @param  User  $user
     * @return Model
     */
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
}