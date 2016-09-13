<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RoleUser
 *
 * @mixin \Eloquent
 */
class RoleUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'role_id'];

    public $timestamps = false;
}
