<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Al Kausar',
            'email' => 'alka@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Antonio',
            'email' => 'antonio@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Category::create([
            'name' => 'Web Programming',
        ]);

        Category::create([
            'name' => 'Personal',
        ]);

        Post::create([
            'tittle' => 'Judul Pertama',
            'creator' => 'Basnewan',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'category_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Kedua',
            'creator' => 'Bisnawan',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'category_id' => 2
        ]);

        Post::create([
            'tittle' => 'Judul Ketiga',
            'creator' => 'Basnewan',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'category_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Keempat',
            'creator' => 'mira',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima quidem culpa. Voluptate, blanditiis neque, nesciunt tempore eligendi voluptates explicabo dolores debitis fugit laboriosam',
            'category_id' => 2
        ]);
    }
}
