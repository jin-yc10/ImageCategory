<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageCategory extends Model
{
    protected $fillable = ['name', 'url'];
    protected $table = "image_categories";
    //
    public function ImageDataSet() {
        return $this->belongsTo('App\ImageDataSet', "image_dataset_id", "id");
    }
    public function ImageItems() {
        return $this->hasMany('App\ImageItem', 'image_id', 'id');
    }
}
