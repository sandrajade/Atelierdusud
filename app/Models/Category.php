<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];


    public function collection(): BelongsToMany
    {
        return $this->BelongsToMany
        (Artist::class); // $this reprends l'objet courant catégorie
        //belongstoMany : catégorie appartient à plusieurs artistes.
    }

}
