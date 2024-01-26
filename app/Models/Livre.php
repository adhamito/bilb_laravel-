<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'année_de_publication', 'nombre_de_pages', 'auteur_id'];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }

    public function emprunts()
    {
        return $this->hasMany(Emprunt::class);
    }
}

