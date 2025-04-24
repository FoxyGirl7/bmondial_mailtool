<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactTag extends Model
{
    protected $fillable = ['contact_id', 'tag_id'];

    public $timestamps = false;
}
