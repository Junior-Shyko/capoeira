<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'birth_date', 'master_id', 'started_at', 'photo',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'started_at' => 'date',
    ];

    public function master()
    {
        return $this->belongsTo(Master::class);
    }

    public function cords()
    {
        return $this->hasMany(StudentCord::class);
    }

    // Método pra pegar timeline: início + cordas ordenadas
    public function getTimelineAttribute()
    {
        $inicio = collect([['type' => 'inicio', 'date' => $this->started_at, 'details' => 'Entrou no grupo']]);
        $cords = $this->cords->map(function ($cord) {
            return [
                'type' => 'corda',
                'date' => $cord->received_at,
                'details' => $cord->cord->name . ' (' . $cord->cord->color . ')',
                'baptized_by' => $cord->baptized_by,
                'photo' => $cord->photo_path,
            ];
        });
        return $inicio->merge($cords)->sortBy('date');
    }
}