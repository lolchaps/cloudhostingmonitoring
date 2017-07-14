<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'town',
        'city',
        'post_code',
        'zip',
        'country',
        'phone',
        'fax',
        'website',
        'email',
        'facebook',
        'twitter',
    ];

    /**
     * Get the company category that owns the company.
     */
    public function category()
    {
        return $this->belongsTo(CompanyCategory::class);
    }

    /**
     * Get the department associated with the company
     */
    public function department()
    {
        return $this->hasOne(Department::class);
    }
}
