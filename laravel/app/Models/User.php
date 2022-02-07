<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'role_id',
        'name',
        'name_hurigana',
        'creator_name',
        'email',
        'password',
        'tel',
        'birthday',
        'gender',
        'post_code',
        'prefecture_id',
        'address',
        'building',
        'icon_image_path',
        'profile',
    ];

}
