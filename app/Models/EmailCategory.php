<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailCategory extends Model
{
    protected $fillable = ['name'];

    public function templates()
    {
        return $this->hasMany(Template::class);
    }
}
