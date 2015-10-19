<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDataSet extends Model
{
    protected $fillable = ['name', 'url'];
    protected $table = "image_datasets";

    //
    public function categories() {
        return $this->hasMany('App\ImageCategory', 'image_dataset_id', 'id');
    }
}
