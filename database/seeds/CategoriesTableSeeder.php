<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'This is main category',
            'parent_id' => '0',
            'image' => 'main_category',
            'slug' => 'main-category',
            'is_active' => '1',
        ]);
    }
}
