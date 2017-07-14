<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * A permission can be applied to users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
