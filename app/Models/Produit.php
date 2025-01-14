<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'NomProduit',
        'Description',
        'Categorie_id',
    ];
    
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}