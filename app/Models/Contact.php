<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'segment_id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'contact_tag');
    }

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_contacts');
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }
}
