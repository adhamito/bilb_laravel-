<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emprunt extends Model
{
    use HasFactory;
    protected $fillable = ['livre_id', 'date_d_emprunt', 'date_de_retour'];

    public function livre()
    {
        return $this->belongsTo(Livre::class);
    }
}

