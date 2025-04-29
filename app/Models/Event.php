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
        'image',
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
    public function getEventImageAttribute()
    {
        if ($this->image) {
            return 'storage/events/' . $this->image;
        } else {
            return "https://dummyimage.com/700x350/dee2e6/6c757d.jpg";
        }
    }
}
