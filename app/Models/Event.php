<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'title',
        'description',
        'event_date',
        'location',
        'trainer_id',
    ];
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}
