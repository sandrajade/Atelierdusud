<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'status', 'url'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function artist(): BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }


}
