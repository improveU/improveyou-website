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
            'model' => 'Beginner',
            'description' => 'Full access for 30 days for free then:',
            'advertisement' => 'Monthly invoice with 30 days money back guarantee',
            'costs' => '10',
            'monthlyPayment' => true,
        ]);
        Subscription::create([
            'model' => 'Improver',
            'description' => 'Full access for all offers',
            'advertisement' => 'Save up to two monthly bills per year guarantee',
            'costs' => '100',
            'monthlyPayment' => false,
        ]);
        Subscription::create([
            'model' => 'Creator',
            'description' => 'Full access for all offers Option to create own offers',
            'advertisement' => 'Offer for content creators to share there media',
            'costs' => '200',
            'monthlyPayment' => false,
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


        //Create Admin user
        User::create([
            'first_name' => 'test',
            'last_name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => 12345678,
            'subscription_id' => '3'
        ]);

        //Seed the rest of the database using factories
        User::factory(250)->create();
        Course::factory(50)->create();

    }
}
