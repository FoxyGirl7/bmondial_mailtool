<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_tag');
    }
}
