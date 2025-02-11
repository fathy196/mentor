<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'title',
        'description',
        'price',
        'start_date',
        'end_date',
        'trainer_id',
    ];
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_student', 'course_id', 'user_id');
    }
    // A course has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}