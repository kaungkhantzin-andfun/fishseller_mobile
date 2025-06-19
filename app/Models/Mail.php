<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mail extends Model
{
    protected $fillable = [
        'send_by',
        'send_to',
        'subject',
        'body',
        'status_id'
    ];

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
