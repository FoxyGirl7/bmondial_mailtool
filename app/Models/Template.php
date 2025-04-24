<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = ['title', 'content', 'email_category_id'];

    public function category()
    {
        return $this->belongsTo(EmailCategory::class, 'email_category_id');
    }
}
