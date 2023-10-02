<?php

namespace App\Models;
use  Illuminate\Database\Eloquen\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use Hasfactory;
    /**
     * Get the events associated with the admin.
     *
     */

     protected $fillable =['login', 'password', 'mail'];
     
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Get the artists associated with the admin.
     */
    public function artists()
    {
        return $this->hasMany(Artist::class);
    }

    /**
     * Get the categories associated with the admin.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get the works associated with the admin.
     */
    public function works()
    {
        return $this->hasMany(Work::class);
    }
}
