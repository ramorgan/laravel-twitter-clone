<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute(){
        return "https://api.adorable.io/avatars/50/".$this->email."@tweety.png";
    }

    public function timeline()
    {
        $following = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id',$following)
            ->orWhere('user_id', $this->id)
            ->latest()
            ->get();
    }

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }

    /**
     * @param  User  $user
     * @return Model
     */
    public function follow(User $user){
        return $this->follows()->save($user);
    }

    /**
     * Who this user follows relationship
     * @return BelongsToMany
     */
    public function follows(){
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

}
