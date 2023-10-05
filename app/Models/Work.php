<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class WorkController extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'status', 'url'];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }
}
