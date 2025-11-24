<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCord extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 'cord_id', 'received_at', 'baptized_by', 'event_name', 'photo_path', 'observations',
    ];

    protected $casts = [
        'received_at' => 'date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function cord()
    {
        return $this->belongsTo(Cord::class);
    }
}