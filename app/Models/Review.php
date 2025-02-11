<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'rating',
        'comment',
        'user_id',
        'course_id',
        ];

    // A review belongs to a user (student)
    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // A review belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
