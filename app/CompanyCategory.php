<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'label',
    ];

    /**
     * Get the company associated with the company category.
     */
    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
