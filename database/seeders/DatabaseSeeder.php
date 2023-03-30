<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Course;
use App\Models\Subscription;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //delete all contents of all tables
        Category::truncate();
        Course::truncate();
        Subscription::truncate();
        Tag::truncate();
        User::truncate();

        //create the three subscriptions models
        Subscription::create([
            'model' => 'Starter',
        ]);
        Subscription::create([
            'model' => 'Improver',
        ]);
        Subscription::create([
            'model' => 'Creator',
        ]);

        //Create the nine categories
        Category::create([
            'category_name' => 'Calisthenics',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Fitness',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Yoga',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Meditation',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Cardio',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Dancing',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Stretching',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Balance',
            'image_path' => ''
        ]);
        Category::create([
            'category_name' => 'Additional Weights',
            'image_path' => ''
        ]);

        //Seed the rest of the database using factories
        Tag::factory(100)->create();
        User::factory(250)->create();
        Course::factory(50)->create();

    }
}
