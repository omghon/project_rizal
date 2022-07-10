<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Penjualan;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(3)->create();

       Category::create([
        'name' => 'Kamera',
        'slug' => 'kamera',
       ]);

       Category::create([
        'name' => 'Laptop',
        'slug' => 'laptop',
       ]);

       Category::create([
        'name' => 'Smartphone',
        'slug' => 'smartphone',
       ]);

       Penjualan::create([
        'user_id' => 1,
        'category_id' => 1,
        'name' => 'Canon EOS 5D Mark IV',
        'slug' => 'canon-eos-5d-mark-iv',
        'harga' => 'Rp. 1.000.000',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
        'excrept' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
       ]);

       Penjualan::create([
        'user_id' => 1,
        'category_id' => 2,
        'name' => 'Macbook Pro',
        'slug' => 'macbook-pro',
        'harga' => 'Rp. 1.000.000',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
        'excrept' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
       ]);

       Penjualan::create([
        'user_id' => 1,
        'category_id' => 3,
        'name' => 'Macbook Air',
        'slug' => 'macbook-air',
        'harga' => 'Rp. 1.000.000',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
        'excrept' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
       ]);

       Penjualan::create([
        'user_id' => 2,
        'category_id' => 1,
        'name' => 'Iphone X',
        'slug' => 'iphone-x',
        'harga' => 'Rp. 1.000.000',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
        'excrept' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
       ]);

       Penjualan::create([
        'user_id' => 3,
        'category_id' => 1,
        'name' => 'Iphone XS',
        'slug' => 'iphone-xs',
        'harga' => 'Rp. 1.000.000',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
        'excrept' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sitLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum nec enim nec molestie. Quisque vitae aliquet leo. Pellentesque sit</p>',
       ]);

    }
}
