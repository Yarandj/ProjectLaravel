<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'artist','genre_id', 'user_id', 'status'];
    public function genre()
    {
        return $this->belongsTo(Genre::class,);
    }
    public function viewed(){
        return $this->belongsToMany(User::class, 'viewed_galleries', 'user_id', 'gallery_id');
    }
}

