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

        $this->call([
            CourseSeeder::class,
        ]);

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

        //Create Admin user
        //User::create([
        //    'first_name' => 'admin@admin',
        //    'last_name' => 'admin@admin',
        //    'username' => 'admin@admin',
        //    'email' => 'admin@admin',
        //    'password' => 'admin@admin',
        //    'subscription_id' => '3'
        //]);

        //Seed the rest of the database using factories
        //User::factory(250)->create();
        //Course::factory(50)->create();
    }
}
