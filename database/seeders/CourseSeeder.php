<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => '-',
            'last_name' => '-',
            'username' => 'Im.proveYou',
            'email' => 'improveu@protonmail.com',
            'password' => 'sml12345',
            'address' => '-',
            'city' => '-',
            'country' => '-',
            'zip_code' => '-',
            'description' =>
                "**Welcome to our creator account on! We are a team of passionate content creators who believe in sharing knowledge and empowering individuals to achieve their goals.**



* Our courses cover a wide range of topics. As creators on this platform, we are dedicated to providing high-quality, engaging content that helps our students succeed. Join us on this journey of discovery and growth, and let's unlock your full potential together.

<br>

* [x] Thanks for being a part of the im.proveyou community. Let's learn and grow together! ",
            'subscription_id' => '3'
        ]);

        User::create([
            'first_name' => '-',
            'last_name' => '-',
            'username' => 'Admin',
            'email' => 'admin@admin',
            'password' => 'admin@admin',
            'address' => '-',
            'city' => '-',
            'country' => '-',
            'zip_code' => '-',
            'description' =>
                "We are the admin team behind the scenes of this platform, working hard to ensure that everything runs smoothly and that our users have the best possible experience. We are dedicated to providing a safe and inclusive environment for everyone who uses our platform, and we work tirelessly to keep it that way.


As the admin account, we are responsible for managing user accounts, reviewing content, and handling any issues that may arise. We are committed to being transparent and responsive, and we welcome feedback and suggestions from our community.
Thank you for choosing our platform, and please don't hesitate to contact us if you have any questions or concerns.

<br>

`break ;)`",
            'subscription_id' => '3'
        ]);

        $course00 = Course::create([
            'title' => 'Home Workout with body weight',
            'introduction' => '6 Effective Exercises to Get Fit',
            'course_description' => '1. Squats - 3 sets of 12-15 repetitions
2. Push-ups - 3 sets of 10-12 repetitions
3. Lunges - 3 sets of 10-12 repetitions per side
4. Plank - Hold for 30-60 seconds and repeat 3 times.
5. Mountain Climbers - 3 sets of 20 reps
6. Sit-Ups - 3 sets of 15-20 reps


<br>
Start with 3 sets of squats, 12-15 repetitions each, to target your lower body. Follow it up with 3 sets of push-ups, 10-12 repetitions each, to work your chest and arms. Then, move on to lunges, 3 sets of 10-12 repetitions per side, for a complete leg workout. The plank exercise is next, holding for 30-60 seconds and repeating 3 times, to strengthen your core. Mountain climbers, 3 sets of 20 reps, provide a full-body cardio workout. Finally, finish off with 3 sets of sit-ups, 15-20 reps each, to work your abs.

Remember to take a day off between workouts, and customize the workout to suit your needs by adding other exercises or adjusting the repetitions. Get started with this effective home workout today and see the results!',
            'image_thumbnail_path' => '/thumbnails/course00.webp',
            'image_cover_path' => '/covers/course00.webp',
            'views' => 3,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Bodyweight', 'Home workout', 'Fitness', 'Exercises', 'Push-ups'];
        $course00->tag($tags);

        $course01 = Course::create([
            'title' => 'Beginner Gym Workout',
            'introduction' => 'Full Body Strength Training',
            'course_description' => '1. **Warm-up**: Start with 5-10 minutes of light cardio, such as jogging on the treadmill or using the elliptical machine, to get your blood flowing and warm up your muscles.
2. Squats: Squats are a great exercise for targeting the lower body. Start with a set of 10-12 reps using just your body weight, and then gradually increase the weight as you feel comfortable.
3. Deadlifts: Deadlifts target the hamstrings, glutes, and lower back. Start with a light weight and gradually increase the weight as you feel comfortable. Aim for 8-10 reps.
4. Bench press: Bench press is a classic exercise for targeting the chest, shoulders, and triceps. Start with a weight that you can comfortably lift for 10-12 reps, and gradually increase the weight as you feel comfortable.
5. Pull-ups or lat pulldowns: Pull-ups or lat pulldowns are great for targeting the back and biceps. Aim for 8-10 reps.
6. Overhead press: Overhead press targets the shoulders and triceps. Start with a weight that you can comfortably lift for 10-12 reps, and gradually increase the weight as you feel comfortable.
7. Lunges: Lunges are a great exercise for targeting the legs and glutes. Start with a set of 10-12 reps on each leg, and then gradually increase the weight as you feel comfortable.
8. Plank: Plank is a great exercise for targeting the core. Hold a plank for 30-60 seconds, and then rest for 30 seconds. Repeat for 2-3 sets.

Remember to stretch after your workout to help prevent injury and reduce muscle soreness. Aim to do this workout 2-3 times per week, with at least one day of rest in between workouts.',
            'image_thumbnail_path' => '/thumbnails/course01.webp',
            'image_cover_path' => '/covers/course01.webp',
            'views' => 8,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Fitness', 'Gym', 'Strength Training', 'Beginner', 'Full Body Workout'];
        $course01->tag($tags);

        $course02 = Course::create([
            'title' => 'Stretching Routine',
            'introduction' => 'Simple Stretching Routine for Daily Flexibility',
            'course_description' => '1. squat stretch: Place your feet slightly wider than shoulder-width apart, lower yourself into a squat and hold your hands in front of your chest. Hold this position for 30 seconds and then return to the starting position.
2. leg extension: Sit on the floor with your legs extended, bend your left foot and place it against the inside of your right thigh. Bend forward and try to touch your toes. Hold this position for 30 seconds and then repeat on the other side.
3. shoulder stretch: Place your left hand on your right shoulder and press down. With your right hand reach over your head and hold your left elbow. Gently pull your left hand to the right to stretch your shoulder. Hold this position for 30 seconds and then repeat on the other side.
4. back stretch: lie on your back and bend your knees. Place your hands under your head and lift your head and shoulders off the floor to stretch your upper back. Hold this position for 30 seconds and then return to the starting position.
5. butterfly stretch: Sit on the floor, bend your knees and place the soles of your feet together. Keep your feet as close to your body as possible and press your knees down to stretch your inner thighs. Hold this position for 30 seconds.

Repeat each stretch 2-3 times on each side. Breathe deeply in and out and hold each position for at least 30 seconds. Avoid jerky movements and pay attention to your body. If you feel pain, stop the stretch and seek medical attention.',
            'image_thumbnail_path' => '/thumbnails/course02.webp',
            'image_cover_path' => '/covers/course02.webp',
            'views' => 2,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Flexibility', 'Stretching', 'Mobility', 'Beginner', 'Exercise', 'Wellness'];
        $course02->tag($tags);

        $course03 = Course::create([
            'title' => 'Interval Running',
            'introduction' => '30-Minute Workout for Endurance',
            'course_description' => "Running is a fantastic way to improve your cardiovascular health, burn calories, and boost your overall fitness. Whether you're a beginner looking to get started or an experienced runner looking to improve your performance, this running course is designed to help you achieve your goals.
In this course, we'll cover everything you need to know to start running or take your running to the next level. We'll begin with the basics of running form, including proper posture, foot strike, and arm swing. From there, we'll progress to training strategies, including how to build endurance, increase your speed, and prevent injury.
Whether you're training for a race or simply looking to improve your health and fitness, this running course has everything you need to succeed. So lace up your running shoes, grab a water bottle, and let's get started!

1. **Warm-up:** Start with a 5-minute brisk walk or jog to get your heart rate up and warm up your muscles.
2. **Intervals:** For the next 20 minutes, alternate between 1 minute of running at a moderate pace and 1 minute of running at a faster pace. Repeat this cycle 10 times.
3. **Cooldown:** Finish with a 5-minute brisk walk or slow jog to gradually bring your heart rate back down and prevent dizziness.

Remember to wear appropriate running shoes and stay hydrated throughout your workout. Adjust the pace and intensity of the intervals based on your fitness level and comfort level. You can also vary the terrain by running uphill or on a soft surface like grass or sand to challenge your muscles in different ways. With regular practice, this workout can help improve your endurance, speed, and overall cardiovascular health.",
            'image_thumbnail_path' => '/thumbnails/course03.webp',
            'image_cover_path' => '/covers/course03.webp',
            'views' => 12,
            'category_id' => 1,
            'creator_id' => 1,
        ]);
        $tags = ['Running', 'Cardio', 'Interval Training', 'Endurance', 'Fitness', 'Advanced'];
        $course03->tag($tags);
    }
}
