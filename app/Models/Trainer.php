<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $fillable = [
        'specialization',
        'bio',
        'experience_years',
        'social_links',
        'user_id',
    ];
    protected $casts = [
        'social_links' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
