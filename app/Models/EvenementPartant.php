<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvenementPartant extends Model
{
    use HasFactory;

    protected $table = "evenement_personne";

    protected $fillable = ['evenement_id', 'user_id'];
}
