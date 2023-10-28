<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewedGalleries extends Model
{
    use HasFactory;
    public function user(){
        $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function gallery(){
        $this->belongsTo(Gallery::class, 'gallery_id', 'id');
    }
}
