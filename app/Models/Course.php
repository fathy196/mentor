<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'start_date',
        'end_date',
        'trainer_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_student', 'course_id', 'student_id');
    }
    // A course has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // Query Scope for Popular Courses
    public function scopePopular($query, $limit = 5)
    {
        //withCount is trying to use user_id because it assumes the default foreign key name,
        // but the pivot table uses student_id.
        
        return $query->with(['trainer', 'category'])
        ->withCount('students as students_count') // Count students using the correct foreign key
        ->orderByDesc('students_count')
        ->take($limit);
    }
}
