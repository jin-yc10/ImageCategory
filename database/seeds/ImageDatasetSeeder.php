<?php
/**
 * Created by PhpStorm.
 * User: jin-yc10
 * Date: 15/10/19
 * Time: 下午9:54
 */
use Illuminate\Database\Seeder;

class ImageDatasetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            $db = new \App\ImageDataSet();
            $db->fill(array('name'=>str_random(10), 'description'=>str_random(10)));
            $db->save();

            for($j = 0; $j < 10; $j++) {
                $cat = new \App\ImageCategory();
                $cat->fill(array('name'=>str_random(10)));
                $cat->ImageDataSet()->associate($db);
                $cat->save();
                for($k = 0; $k < 10; $k++) {
                    $img = new \App\ImageItem();
                    $img->fill(['name'=>str_random(10),
                        'url'=>str_random(10)
                    ]);
                    $img->category()->associate($cat);
                    $img->save();
                }
            }
        }
    }
}