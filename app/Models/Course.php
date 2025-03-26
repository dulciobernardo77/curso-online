<?php

// app/Models/Course.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'objectives',
        'requirements',
        'duration_hours',
        'level',
        'featured',
        'published',
        'instructor_id'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published' => 'boolean',
        'duration_hours' => 'integer',
        'level' => 'integer'
    ];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function modules()
    {
        return $this->hasMany(CourseModule::class)->orderBy('order');
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'student_progress')
            ->withPivot('completed', 'last_accessed_at')
            ->withTimestamps();
    }

    public function getLevelTextAttribute()
    {
        return match($this->level) {
            1 => 'Iniciante',
            2 => 'Intermediário',
            3 => 'Avançado',
            default => 'Não especificado'
        };
    }
}
