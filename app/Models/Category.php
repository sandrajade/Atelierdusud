<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =['name', 'status', 'color'];


    public function work(): HasMany

    {
        return $this->hasMany(Work::class);
    }

    public function getColorAttribute()
    {
        switch ($this->category) {
            case 'photos':
                return 'red';
            case 'porcelaines':
                return 'orange';
            case 'gravures':
                return 'emerald';
            case 'oeuvres numériques':
                return 'blue';
            case 'sculptures':
                return 'amber';
            case 'poèmes':
                return 'pink';
            case 'théâtres':
                return 'sky';
            case 'musiques':
                return 'purple';

        }
    }

}



