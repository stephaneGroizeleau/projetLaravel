<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Storage::disk('local')->delete(Storage::allFiles());
        
        App\Category::create([
            'title' => 'homme'
        ]);

        App\Category::create([
            'title' => 'femme'
        ]);


        factory(App\Product::class, 18)->create()->each(function($product){

            $category = App\Category::find(rand(1,2));
            $product->category()->associate($category);

            $link = str_random(18).'jpg';

            $file = file_get_contents('https://placeimg.com/300/300/nature/grayscale');

            $product->update([
                'url_image' => $link
            ]);

            Storage::disk('local')->put($link, $file);
        
            $product->save();

        });

     
    }
}
