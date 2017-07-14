<?php

namespace App;

trait HasPermissions
{
	/**
     * A user may be given various permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    /**
     * Grant the given permission to a user.
     *
     * @param  Permission $permission
     * @return mixed
     */
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
    /**
     * Determine if the user has the given permission.
     *
     * @param  mixed $permission
     * @return boolean
     */
    public function hasPermission($permission)
    {
        if (is_string($permission->name)) {
            return $this->permissions->contains('name', $permission->name);
        }
        return !! $permission->intersect($this->permissions)->count();
    }
}