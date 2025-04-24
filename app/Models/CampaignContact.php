<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignContact extends Model
{
    protected $fillable = ['campaign_id', 'contact_id'];

    public $timestamps = false;
}
