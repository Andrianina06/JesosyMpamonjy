<?php

namespace App\Models;

use App\Models\Lieu;
use App\Models\Personne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eglise extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function personne()
    {
        return $this->BelongsTo(Personne::class);
    }

    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }
}
