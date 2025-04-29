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

    // Mutator to handle the social links logic
    public function setSocialLinksAttribute($value)
    {
        $socialLinks = [];

        // Platform names and their request keys
        $platforms = [
            'facebook' => 'Facebook',
            'linkedin' => 'LinkedIn',
            'instagram' => 'Instagram',
            'twitter' => 'Twitter',
        ];

        foreach ($platforms as $key => $platform) {
            if (!empty($value[$key])) {
                $socialLinks[] = ['platform' => $platform, 'url' => $value[$key]];
            }
        }

        // Store the processed social links as a JSON array
        $this->attributes['social_links'] = json_encode($socialLinks);
    }
    
public function getFormattedSocialLinks()
{
    return collect($this->social_links)
        ->mapWithKeys(function ($item) {
            return [strtolower($item['platform']) => $item['url']];
        })
        ->toArray();
}
}
