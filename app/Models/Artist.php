<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url', 'description', 'status'];

    public function collection(): BelongsToMany
    {
        return $this->belongsToMany(Collection::class);
    }

}


