<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['title', 'subject', 'content', 'user_id', 'template_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'campaign_contacts');
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
