<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $table = 'prefectures';

    public function getPrefectures()
    {
        return Prefecture::orderBy('id', 'asc')->get();
    }
}
