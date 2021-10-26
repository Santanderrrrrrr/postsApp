<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Database\Factories\PostFactory;
    class DatabaseSeeder extends Seeder
    {
    
        /**
         * Seed the application's database.
         *
         * @return void
         */
         
        public function run()
        {
            factory(App\Post::class, 15)->create();
        }
    }
