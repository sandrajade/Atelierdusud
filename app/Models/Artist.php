<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id,', 'url' , 'description', 'status'];

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function collection(): HasMany
    {
        return $this->hasMany(Collection::class);
    }

    // pour préciser que la table category est une table pivot qui fait la relation avec table artist et collection

    public function work(): BelongsToMany
    {
        return $this->belongsToMany(work::class, 'collections');
    }

}


