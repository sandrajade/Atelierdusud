<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable =['title', 'description', 'status'];

    public function work(): BelongsToMany
    {
        return $this->belongsToMany(Work::class);
    }

    public function artist(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }
}
