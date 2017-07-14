<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'surname',
        'email', 
        'mobile',
        'username',
        'password',
        'signature',
        'mobile_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the department that owns the user.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
