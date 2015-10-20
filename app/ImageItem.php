<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageItem extends Model
{
    protected $fillable = ['name', 'url'];

    public function category() {
        return $this->belongsTo('\App\ImageCategory', 'image_category_id', 'id');
    }
}
