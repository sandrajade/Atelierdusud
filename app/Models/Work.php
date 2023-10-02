<?php

namespace App\Models;
use App\Models\work;
use App\Models\Artist;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class WorkController extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'artist_id', 'description', 'status', 'url'];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }
}
