<?php

namespace Database\Seeders;

//use App\database\seeders;
//use App\database\factories;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Factory;
use App\Models\User;
use App\models\Category;
use App\Models\Task;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UserSeeder::class,
        // ]);
        
        User::factory(2)->create();
        Category::factory(1)->create();
        Task::factory(5)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
