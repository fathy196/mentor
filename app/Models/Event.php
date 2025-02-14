<?php

namespace App\Models;

use Carbon\Carbon;
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
    public function getFormattedEventDateAttribute()
    {
        return Carbon::parse($this->event_date)
        ->format('l, F j, Y \a\t g:i A');
    }
}
