<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailAttachment extends Model
{
    protected $fillable = ['campaign_id', 'file_path'];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
