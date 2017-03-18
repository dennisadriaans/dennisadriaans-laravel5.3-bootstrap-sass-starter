<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;


class User extends Model implements Authenticatable {
    use SyncableGraphNodeTrait;
    use AuthenticableTrait;

    protected $hidden = ['access_token'];
    protected $fillable = ['full_name', 'name', 'email', 'password', 'provider', 'provider_id', 'facebook_user_id'];

}